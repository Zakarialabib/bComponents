<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

<div>
    <x-slot:title>Accordion Component</x-slot:title>
    <x-slot:page_title>Accordion</x-slot:page_title>

    <!-- Introduction Section -->
    <section id="introduction">
        <h2 class="text-3xl font-bold mb-6">Introduction</h2>
        <p class="mb-4 text-lg ">
            The <strong>Accordion Component</strong> is a flexible and customizable collapsible section built with <strong>Tailwind CSS</strong> and <strong>Alpine.js</strong>. It allows users to expand and collapse content sections, making it ideal for organizing information in a clean and space-efficient manner.
        </p>

        <h3 class="text-xl font-semibold mb-4">Key Features</h3>
        <ul class="list-disc pl-6 space-y-2">
            <li><strong>Customizable Icons:</strong> Add icons to the accordion header with flexible positioning.</li>
            <li><strong>Animation:</strong> Smooth expand/collapse animations with configurable duration.</li>
            <li><strong>Accessibility:</strong> Fully accessible with ARIA attributes and keyboard navigation.</li>
            <li><strong>Multiple Instances:</strong> Support for multiple accordions with independent states.</li>
            <li><strong>Remember State:</strong> Option to remember the open/closed state using local storage.</li>
        </ul>

        <h3 class="text-xl font-semibold mt-8 mb-4">Usage Scenarios</h3>
        <ul class="list-disc pl-6 space-y-2">
            <li><strong>FAQ Sections:</strong> Display frequently asked questions with expandable answers.</li>
            <li><strong>Product Features:</strong> Showcase product features with collapsible details.</li>
            <li><strong>Documentation:</strong> Organize tutorials or documentation into expandable sections.</li>
            <li><strong>Settings Panels:</strong> Create collapsible settings panels for better organization.</li>
            <li><strong>Navigation Menus:</strong> Build collapsible menus for mobile or sidebar navigation.</li>
        </ul>
    </section>

    <!-- Basic Usage Section -->
    <section id="basic-usage" class="mt-12">
        <h2 class="text-2xl font-bold mb-6">Basic Usage</h2>
        <p class="mb-4 ">
            The accordion component is simple to use and can be customized with various attributes. Below are examples of common use cases.
        </p>

        <div class="space-y-8">
            <!-- Accordion with Expanded Content -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Accordion with Expanded Content</h3>
                <x-b-accordion title="Accordion with Content" id="custom-accordion" is-open="true">
                    <p>This accordion contains more complex content:</p>
                    <ul class="list-disc pl-6 mt-2">
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ul>
                    <p class="mt-2">And some additional text.</p>
                </x-b-accordion>
                <pre class="my-4 language-markup"><code>&lt;x-b-accordion title="Accordion with Content" id="custom-accordion" is-open="true"&gt;
    &lt;p&gt;This accordion contains more complex content:&lt;/p&gt;
    &lt;ul&gt;
        &lt;li&gt;Item 1&lt;/li&gt;
        &lt;li&gt;Item 2&lt;/li&gt;
        &lt;li&gt;Item 3&lt;/li&gt;
    &lt;/ul&gt;
    &lt;p&gt;And some additional text.&lt;/p&gt;
&lt;/x-b-accordion&gt;</code></pre>
            </div>

            <!-- Accordion Closed by Default -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Accordion Closed by Default</h3>
                <x-b-accordion title="Accordion Closed" id="closed-accordion">
                    <p>This accordion is closed by default. Click to expand.</p>
                </x-b-accordion>
                <pre class="my-4 language-markup"><code>&lt;x-b-accordion title="Accordion Closed" id="closed-accordion"&gt;
    &lt;p&gt;This accordion is closed by default. Click to expand.&lt;/p&gt;
&lt;/x-b-accordion&gt;</code></pre>
            </div>

            <!-- Accordion with Custom Icon -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Accordion with Custom Icon</h3>
                <x-b-accordion title="Accordion with Icon" icon="arrow-down" id="icon-accordion">
                    <p>This accordion has a custom icon next to the title.</p>
                </x-b-accordion>
                <pre class="my-4 language-markup"><code>&lt;x-b-accordion title="Accordion with Icon" icon="arrow-down" id="icon-accordion"&gt;
    &lt;p&gt;This accordion has a custom icon next to the title.&lt;/p&gt;
&lt;/x-b-accordion&gt;</code></pre>
            </div>

            <!-- Accordion with Icon on the Left -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Accordion with Icon on the Left</h3>
                <x-b-accordion title="Accordion with Icon on the Left" icon="angle-down" icon-position="left" id="icon-left-accordion">
                    <p>This accordion has a custom icon on the left side of the title.</p>
                </x-b-accordion>
                <pre class="my-4 language-markup"><code>&lt;x-b-accordion title="Accordion with Icon on the Left" icon="angle-down" icon-position="left" id="icon-left-accordion"&gt;
    &lt;p&gt;This accordion has a custom icon on the left side of the title.&lt;/p&gt;
&lt;/x-b-accordion&gt;</code></pre>
            </div>

            <!-- Accordion with Custom Styling -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Accordion with Custom Styling</h3>
                <x-b-accordion title="Accordion with Custom Styling" class="!bg-gray-200 !text-black" id="custom-styling">
                    <p>This accordion has custom styling applied using Tailwind CSS utility classes.</p>
                </x-b-accordion>
                <pre class="my-4 language-markup"><code>&lt;x-b-accordion title="Accordion with Custom Styling" class="!bg-gray-200 !text-black" id="custom-styling"&gt;
    &lt;p&gt;This accordion has custom styling applied using Tailwind CSS utility classes.&lt;/p&gt;
&lt;/x-b-accordion&gt;</code></pre>
            </div>
        </div>
    </section>

    <!-- API Reference Section -->
    <section id="api-reference" class="mt-12">
        <h2 class="text-2xl font-bold mb-6">API Reference</h2>
        <p class="mb-4 ">
            The table below provides a comprehensive list of all available attributes for the Accordion component.
        </p>

        <x-b-table>
            <thead>
                <th>Attribute</th>
                <th>Default</th>
                <th>Description</th>
            </thead>
            <tbody>
                <tr>
                    <td><code>title</code></td>
                    <td><em>Required</em></td>
                    <td>The title of the accordion.</td>
                </tr>
                <tr>
                    <td><code>id</code></td>
                    <td><em>Auto-generated</em></td>
                    <td>Unique ID for the accordion. If not provided, one will be generated automatically.</td>
                </tr>
                <tr>
                    <td><code>is-open</code></td>
                    <td><code>false</code></td>
                    <td>Whether the accordion is open by default.</td>
                </tr>
                <tr>
                    <td><code>icon</code></td>
                    <td><code>null</code></td>
                    <td>Font Awesome icon class (e.g., <code>arrow-down</code>).</td>
                </tr>
                <tr>
                    <td><code>icon-position</code></td>
                    <td><code>right</code></td>
                    <td>Position of the icon relative to the title (<code>left</code> or <code>right</code>).</td>
                </tr>
                <tr>
                    <td><code>class</code></td>
                    <td><code>null</code></td>
                    <td>Custom Tailwind CSS classes for styling.</td>
                </tr>
            </tbody>
            </x-table>
    </section>

    <!-- Side Navigation -->
    <x-slot:sideNavigation>
        <div class="space-y-2">
            <div class="font-medium text-lg mb-2">Contents</div>
            @foreach([
            'introduction' => 'Introduction',
            'basic-usage' => 'Basic Usage',
            'api-reference' => 'API Reference',
            ] as $id => $title)
            <div class="flex items-center group">
                <div class="w-2 h-2 mr-2 bg-gray-300 rounded-full group-hover:bg-primary-500"></div>
                <a href="#{{ $id }}" class=" hover:text-primary-600">{{ $title }}</a>
            </div>
            @endforeach
        </div>
    </x-slot:sideNavigation>
</div>