<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>
<div>
    <x-slot:title>Rich Text Editor Component</x-slot:title>
    <x-slot:page_title>Rich Text Editor</x-slot:page_title>

    <p id="intro">
        The Rich Text Editor component is a powerful WYSIWYG editor built with Quill.js, Alpine.js, and integrated with Livewire.
        It provides a user-friendly interface for creating and editing formatted content with support for text formatting,
        lists, links, images, and more. The component also includes image upload functionality with a visual progress indicator.
    </p>
    <p>Usage Scenarios:</p>

    <ul>
        <li>
            Content Management: Create and edit rich content for blogs, articles, or product descriptions.
        </li>
        <li>
            Form Inputs: Enhance forms with rich text capabilities for detailed descriptions or comments.
        </li>
        <li>
            Admin Panels: Provide content editors with a familiar and powerful editing experience.
        </li>
        <li>
            Documentation: Create formatted documentation with support for images, links, and code blocks.
        </li>
    </ul>

    <h2 id="basic-usage">Basic Usage</h2>
    <p>
        The Rich Text Editor component can be used with Livewire by adding the component to your Blade view and binding it to a Livewire property.
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.editor wire:model="content" /&gt;
        </code>
    </pre>

    <h2 id="customization">Customization</h2>
    <p>
        The Rich Text Editor component can be customized with various options to suit your needs.
    </p>

    <h3>Custom Placeholder</h3>
    <p>
        You can customize the placeholder text that appears when the editor is empty.
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.editor wire:model="content" placeholder="Enter your content here..." /&gt;
        </code>
    </pre>

    <h3>Image Upload Endpoint</h3>
    <p>
        The editor supports image uploads. You need to specify an endpoint that will handle the image upload.
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.editor wire:model="content" endpoint="/api/upload-image" /&gt;
        </code>
    </pre>

    <p>
        The endpoint should accept a POST request with an 'image' field containing the file and return a JSON response with the URL of the uploaded image:
    </p>

    <pre class="language-php line-numbers">
        <code>
            // Example controller method
            public function uploadImage(Request $request)
            {
                $path = $request->file('image')->store('images', 'public');
                return response()->json(['url' => 'storage/' . $path]);
            }
        </code>
    </pre>

    <h2 id="features">Features</h2>

    <h3>Text Formatting</h3>
    <p>
        The editor supports various text formatting options including bold, italic, underline, and strike-through.
    </p>

    <h3>Headers</h3>
    <p>
        You can add headers to structure your content.
    </p>

    <h3>Lists</h3>
    <p>
        The editor supports both ordered (numbered) and unordered (bullet) lists.
    </p>

    <h3>Links</h3>
    <p>
        You can add links to external resources or internal pages.
    </p>

    <h3>Images</h3>
    <p>
        The editor supports image uploads with a visual progress indicator.
    </p>

    <h3>Blockquotes</h3>
    <p>
        You can add blockquotes to highlight important information or quotes.
    </p>

    <h3>Code Blocks</h3>
    <p>
        The editor supports code blocks for displaying code snippets.
    </p>

    <h2 id="livewire-integration">Livewire Integration</h2>
    <p>
        The Rich Text Editor component is fully integrated with Livewire. You can bind it to a Livewire property using the wire:model directive.
    </p>

    <pre class="language-php line-numbers">
        <code>
            // Example Livewire component
            class PostEditor extends Component
            {
                public $content = '';

                public function save()
                {
                    // Validate and save the content
                    $this->validate([
                        'content' => 'required',
                    ]);

                    Post::create([
                        'content' => $this->content,
                    ]);

                    session()->flash('message', 'Post created successfully.');
                    $this->content = '';
                }
            }
        </code>
    </pre>

    <h2 id="error-handling">Error Handling</h2>
    <p>
        The Rich Text Editor component integrates with Laravel's validation system. When validation errors occur, the editor will display an error message and highlight the editor with a red border.
    </p>

    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.editor wire:model="content" name="content" /&gt;

            @error('content')
                &lt;span class="text-red-600 text-sm mt-1"&gt;{{ $message }}&lt;/span&gt;
            @enderror
        </code>
    </pre>

    <h2 id="attributes">Full List Of Attributes</h2>
    <p>The table below shows a comprehensive list of all the attributes available for the Rich Text Editor component.</p>

    <x-table-responsive>
        <x-table.thead>
            <x-table.th>Option</x-table.th>
            <x-table.th>Default</x-table.th>
            <x-table.th>Available Values</x-table.th>
        </x-table.thead>
        <x-table.tbody>
            <tr>
                <td>name</td>
                <td><em>required</em></td>
                <td>The name attribute for the hidden textarea that stores the editor content.</td>
            </tr>
            <tr>
                <td>value</td>
                <td><em>blank</em></td>
                <td>The initial value of the editor.</td>
            </tr>
            <tr>
                <td>placeholder</td>
                <td>Write something great!</td>
                <td>The placeholder text that appears when the editor is empty.</td>
            </tr>
            <tr>
                <td>endpoint</td>
                <td><em>blank</em></td>
                <td>The URL endpoint for image uploads. If not provided, image uploads will not work.</td>
            </tr>
        </x-table.tbody>
    </x-table-responsive>

    <h2 id="styling">Styling</h2>
    <p>
        The Rich Text Editor component uses Quill.js's Snow theme by default. The component includes custom styling to match the BComponents design system.
    </p>

    <p>
        You can customize the editor's appearance by overriding the CSS variables or adding custom CSS rules.
    </p>

    <h2 id="accessibility">Accessibility</h2>
    <p>
        The Rich Text Editor component is built with accessibility in mind. It supports keyboard navigation and screen readers.
    </p>

    <h2 id="browser-support">Browser Support</h2>
    <p>
        The Rich Text Editor component works in all modern browsers including Chrome, Firefox, Safari, and Edge.
    </p>

    <h2 id="limitations">Limitations</h2>
    <p>
        The Rich Text Editor component has the following limitations:
    </p>

    <ul>
        <li>Image uploads require a server-side endpoint to handle the uploads.</li>
        <li>The editor does not support tables or advanced formatting options.</li>
        <li>Mobile support is limited and may not provide the best user experience on small screens.</li>
    </ul>

    <h2 id="examples">Complete Examples</h2>

    <h3>Basic Editor with Validation</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;form wire:submit.prevent="save"&gt;
                &lt;div class="mb-4"&gt;
                    &lt;x-input.label for="content" value="Content" /&gt;
                    &lt;x-input.editor wire:model="content" name="content" /&gt;
                    @error('content')
                        &lt;span class="text-red-600 text-sm mt-1"&gt;{{ $message }}&lt;/span&gt;
                    @enderror
                &lt;/div&gt;

                &lt;div class="flex justify-end"&gt;
                    &lt;x-button primary type="submit"&gt;Save&lt;/x-button&gt;
                &lt;/div&gt;
            &lt;/form&gt;
        </code>
    </pre>

    <h3>Editor with Image Upload</h3>
    <pre class="language-markup line-numbers">
        <code>
            &lt;x-input.editor
                wire:model="content"
                name="content"
                placeholder="Write your blog post here..."
                endpoint="/api/upload-image"
            /&gt;
        </code>
    </pre>
</div>