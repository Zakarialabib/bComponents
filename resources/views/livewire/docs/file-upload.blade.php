<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>File Upload Component</x-slot:title>
    <x-slot:page_title>File Upload</x-slot:page_title>

    <p id="intro">
        The File Upload component provides a user-friendly interface for uploading files with support for drag-and-drop, 
        file previews, progress indicators, and validation. It's built with Alpine.js and integrates seamlessly with Livewire 
        for real-time feedback and server-side validation.
    </p>
    <p>Usage Scenarios:</p>

    <ul>
        <li>
            User Avatars: Allow users to upload profile pictures with preview and cropping capabilities.
        </li>
        <li>
            Document Management: Upload and manage documents with metadata and categorization.
        </li>
        <li>
            Media Galleries: Create image or video galleries with thumbnail previews.
        </li>
        <li>
            Form Attachments: Add file attachments to forms with validation and size restrictions.
        </li>
    </ul>

    <h2 id="basic-usage">Basic Usage</h2>
    <p>
        The File Upload component can be used with Livewire by adding the component to your Blade view and binding it to a Livewire property.
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.file-upload wire:model="file" /&gt;
        </code>
    </pre>

    <h2 id="customization">Customization</h2>
    <p>
        The File Upload component can be customized with various options to suit your needs.
    </p>

    <h3>Accepted File Types</h3>
    <p>
        You can specify which file types are accepted by the file upload component.
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.file-upload wire:model="file" accept="image/*" /&gt;
        </code>
    </pre>

    <h3>Multiple Files</h3>
    <p>
        The component supports uploading multiple files at once.
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.file-upload wire:model="files" multiple /&gt;
        </code>
    </pre>

    <h3>Custom Labels</h3>
    <p>
        You can customize the text displayed in the upload area.
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.file-upload
                wire:model="file"
                label="Upload your profile picture"
                help-text="JPG, PNG or GIF up to 2MB"
            /&gt;
        </code>
    </pre>

    <h2 id="features">Features</h2>

    <h3>Drag and Drop</h3>
    <p>
        The component supports drag and drop functionality, allowing users to drag files from their file explorer directly onto the upload area.
    </p>

    <h3>File Preview</h3>
    <p>
        For image files, the component displays a preview of the uploaded file. For other file types, it shows an appropriate icon.
    </p>

    <h3>Progress Indicator</h3>
    <p>
        During file upload, a progress bar indicates the upload progress, providing visual feedback to the user.
    </p>

    <h3>Validation</h3>
    <p>
        The component integrates with Laravel's validation system, allowing you to validate file types, sizes, and other attributes.
    </p>

    <h2 id="livewire-integration">Livewire Integration</h2>
    <p>
        The File Upload component is fully integrated with Livewire. You can bind it to a Livewire property using the wire:model directive.
    </p>

    <pre class="language-php line-numbers">
        <code>
            // Example Livewire component
            class ProfilePictureUpload extends Component
            {
                public $photo;

                protected $rules = [
                    'photo' => 'required|image|max:2048', // 2MB max
                ];

                public function save()
                {
                    $this->validate();

                    $path = $this->photo->store('photos', 'public');

                    auth()->user()->update([
                        'profile_photo_path' => $path,
                    ]);

                    session()->flash('message', 'Profile picture updated successfully.');
                }
            }
        </code>
    </pre>

    <h2 id="file-metadata">File Metadata</h2>
    <p>
        The component allows you to capture and display file metadata such as file name, size, type, and custom metadata like alt text and captions.
    </p>
    
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.file-detail :file="$file" /&gt;
        </code>
    </pre>
    
    <h2 id="error-handling">Error Handling</h2>
    <p>
        The File Upload component integrates with Laravel's validation system. When validation errors occur, the component will display an error message.
    </p>
    
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.file-upload wire:model="file" /&gt;
            @error('file') &lt;span class="text-red-600 text-sm mt-1"&gt;{{ $message }}&lt;/span&gt; @enderror
        </code>
    </pre>
    
    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the File Upload component.</p>
    
    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <tr>
                <td>accept</td>
                <td>*</td>
                <td>The accepted file types, e.g., "image/*", ".pdf,.doc,.docx", etc.</td>
            </tr>
            <tr>
                <td>multiple</td>
                <td>false</td>
                <td>Whether to allow multiple file uploads. <code>true</code> or <code>false</code>.</td>
            </tr>
            <tr>
                <td>label</td>
                <td>Select File</td>
                <td>The text displayed on the upload button.</td>
            </tr>
            <tr>
                <td>help-text</td>
                <td><em>blank</em></td>
                <td>Additional help text displayed below the upload area.</td>
            </tr>
            <tr>
                <td>max-size</td>
                <td>5</td>
                <td>The maximum file size in MB.</td>
            </tr>
            <tr>
                <td>max-files</td>
                <td><em>null</em></td>
                <td>The maximum number of files that can be uploaded when multiple is true.</td>
            </tr>
        </x-table.tbody>
    </x-table-responsive>
    
    <h2 id="examples">Complete Examples</h2>
    
    <h3>Profile Picture Upload</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;form wire:submit.prevent="save"&gt;
                &lt;div class="mb-4"&gt;
                    &lt;x-input.label for="photo" value="Profile Picture" /&gt;
                    &lt;x-input.file-upload
                        wire:model="photo"
                        accept="image/*"
                        label="Upload Photo"
                        help-text="JPG, PNG or GIF up to 2MB"
                    /&gt;
                    @error('photo') &lt;span class="text-red-600 text-sm mt-1"&gt;{{ $message }}&lt;/span&gt; @enderror
                &lt;/div&gt;
                
                &lt;div class="flex justify-end"&gt;
                    &lt;x-button primary type="submit"&gt;Save&lt;/x-button&gt;
                &lt;/div&gt;
            &lt;/form&gt;
        </code>
    </pre>
    
    <h3>Multiple File Upload</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.file-upload
                wire:model="documents"
                multiple
                accept=".pdf,.doc,.docx"
                label="Upload Documents"
                help-text="PDF or Word documents up to 10MB"
                max-size="10"
                max-files="5"
            /&gt;
        </code>
    </pre>