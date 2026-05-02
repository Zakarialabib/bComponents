<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

<div>
    <x-slot:title>Button Component - BComponents</x-slot:title>
    <x-slot:page_title>Button Component</x-slot:page_title>

    <div class="space-y-12">
        <!-- Introduction Section -->
        <section id="introduction">
            <h2 class="text-3xl font-bold mb-6">Introduction</h2>
            <p class="mb-4 text-lg text-white">
                The <strong>Button Component</strong> is a highly customizable and feature-rich component designed for modern web applications. It supports a wide range of styles, states, and integrations, making it suitable for any use case.
            </p>
            <h3 class="text-xl font-semibold mb-4">Key Features</h3>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong>Multiple Variants:</strong> Solid, Outline, Soft, Ghost, and Link styles.</li>
                <li><strong>Color Schemes:</strong> 8 predefined colors (primary, secondary, success, danger, warning, info, light, dark).</li>
                <li><strong>Flexible Sizing:</strong> 5 size options (xs, sm, md, lg, xl).</li>
                <li><strong>Icon Support:</strong> Easily add icons with customizable positioning.</li>
                <li><strong>Loading States:</strong> Built-in loading spinner with Livewire integration.</li>
                <li><strong>Accessibility:</strong> Fully accessible with ARIA labels and keyboard support.</li>
                <li><strong>Advanced Features:</strong> Ripple effect, tooltips, button groups, and more.</li>
            </ul>
        </section>

        <!-- Basic Usage Section -->
        <section id="basic-usage">
            <h2 class="text-2xl font-bold mb-4">Basic Usage</h2>
            <div class="p-6 shadow">
                <h3 class="text-xl font-semibold mb-4">Default Button</h3>
                <x-b-button>Default Button</x-b-button>
                <pre class="mt-4"><code>&lt;x-b-button&gt;Click Me&lt;/x-b-button&gt;</code></pre>
            </div>
            <div class="p-6 shadow">
                <h3 class="text-xl font-semibold mb-4">Link Button</h3>
                <x-b-button href="#home" type="link">Link Button</x-b-button>
                <pre class="mt-4"><code>&lt;x-b-button href="#home" type="link"&gt;Home&lt;/x-b-button&gt;</code></pre>
            </div>
        </section>

        <!-- Colors & Variants Section -->
        <section id="colors-variants">
            <h2 class="text-2xl font-bold mb-6">Colors & Variants</h2>
            <div class="space-y-8">
                @foreach(['solid', 'outline', 'soft', 'ghost', 'link'] as $variant)
                <div class="border rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4">{{ ucfirst($variant) }} Buttons</h3>
                    <div class="grid grid-cols-4 gap-4">
                        @foreach(['primary', 'secondary', 'success', 'danger'] as $color)
                        <x-b-button :color="$color" :variant="$variant">
                            {{ ucfirst($color) }}
                        </x-b-button>
                        @endforeach
                    </div>
                    <pre class="mt-4"><code>&lt;x-b-button color="primary" variant="{{ $variant }}"&gt;
    {{ ucfirst($color) }}
&lt;/x-b-button&gt;</code></pre>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Sizing & Styling Section -->
        <section id="sizing-styling">
            <h2 class="text-2xl font-bold mb-6">Sizing & Styling</h2>
            <div class="grid gap-6 md:grid-cols-2">
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Sizes</h3>
                    <div class="space-y-4">
                        @foreach(['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                        <x-b-button :size="$size" class="w-full">
                            {{ strtoupper($size) }} Size
                        </x-b-button>
                        @endforeach
                    </div>
                </div>

                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Rounded Styles</h3>
                    <div class="space-y-4">
                        @foreach(['none', 'sm', 'md', 'lg', 'full'] as $rounded)
                        <x-b-button :rounded="$rounded" class="w-full">
                            {{ ucfirst($rounded) }}
                        </x-b-button>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- Icon Integration Section -->
        <section id="icons">
            <h2 class="text-2xl font-bold mb-6">Icon Integration</h2>
            <div class="grid gap-6 md:grid-cols-3">
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Left Icon</h3>
                    <x-b-button icon="fas fa-star">Left Icon</x-b-button>
                    <pre class="mt-4"><code>&lt;x-b-button icon="fas fa-star"&gt;Favorites&lt;/x-b-button&gt;</code></pre>
                </div>
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Right Icon</h3>
                    <x-b-button icon="fas fa-arrow-right" icon-position="right">Right Icon</x-b-button>
                    <pre class="mt-4"><code>&lt;x-b-button icon="fas fa-arrow-right" icon-position="right"&gt;Continue&lt;/x-b-button&gt;</code></pre>
                </div>
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Icon Only</h3>
                    <x-b-button icon="fas fa-user" icon-only aria-label="Profile" />
                    <pre class="mt-4"><code>&lt;x-b-button icon="fas fa-user" icon-only /&gt;</code></pre>
                </div>
            </div>
        </section>

        <!-- Advanced Features Section -->
        <section id="advanced">
            <h2 class="text-2xl font-bold mb-6">Advanced Features</h2>
            <div class="grid gap-6 md:grid-cols-2">
                <!-- Button Groups -->
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Button Groups</h3>
                    <div class="inline-flex">
                        <x-b-button group="toolbar" group-position="first">First</x-b-button>
                        <x-b-button group="toolbar" group-position="middle">Middle</x-b-button>
                        <x-b-button group="toolbar" group-position="last">Last</x-b-button>
                    </div>
                    <pre class="mt-4"><code>&lt;x-b-button group="toolbar" group-position="first"&gt;...&lt;/x-b-button&gt;
&lt;x-b-button group="toolbar" group-position="middle"&gt;...&lt;/x-b-button&gt;
&lt;x-b-button group="toolbar" group-position="last"&gt;...&lt;/x-b-button&gt;</code></pre>
                </div>

                <!-- Tooltips & Accessibility -->
                <div class="p-6 bg-white rounded-lg shadow">
                    <h3 class="text-xl font-semibold mb-4">Accessibility Features</h3>
                    <x-b-button
                        icon="fas fa-lock"
                        disabled
                        disabled-reason="Requires admin privileges"
                        aria-label="Secure operation"
                        tooltip="Restricted action">
                        Secure Action
                    </x-b-button>
                    <pre class="mt-4"><code>&lt;x-b-button
    disabled
    disabled-reason="Requires admin privileges"
    aria-label="Secure operation"
    tooltip="Restricted action"
&gt;...&lt;/x-b-button&gt;</code></pre>
                </div>
            </div>
        </section>

        <!-- API Reference Section -->
        <section id="api">
            <h2 class="text-2xl font-bold mb-6">API Reference</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Property</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Default</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach([
                        ['color', 'string', 'primary', 'Button color scheme'],
                        ['variant', 'string', 'solid', 'Visual style variant'],
                        ['size', 'string', 'md', 'Size preset'],
                        ['rounded', 'string', 'md', 'Border radius style'],
                        ['icon', 'string|null', 'null', 'Font Awesome icon class'],
                        ['icon-position', 'string', 'left', 'Icon placement (left, right)'],
                        ['wire-click', 'string|null', 'null', 'Livewire click handler'],
                        ['x-on-click', 'string|null', 'null', 'Alpine.js click handler'],
                        ['ripple', 'boolean', 'true', 'Ripple effect toggle'],
                        ['group', 'string|null', 'null', 'Button group identifier'],
                        ['group-position', 'string|null', 'null', 'Position in button group (first, middle, last)'],
                        ['tooltip', 'string|null', 'null', 'Hover tooltip text'],
                        ['shortcut', 'string|null', 'null', 'Keyboard shortcut'],
                        ] as $prop)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-mono">{{ $prop[0] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $prop[1] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $prop[2] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $prop[3] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <!-- Side Navigation -->
    <x-slot:sideNavigation>
        <div class="space-y-2">
            <div class="font-medium text-lg mb-2">Contents</div>
            @foreach([
            'introduction' => 'Introduction',
            'basic-usage' => 'Basic Usage',
            'colors-variants' => 'Colors & Variants',
            'sizing-styling' => 'Sizing & Styling',
            'icons' => 'Icons',
            'advanced' => 'Advanced Features',
            'api' => 'API Reference'
            ] as $id => $title)
            <div class="flex items-center group">
                <div class="w-2 h-2 mr-2 bg-gray-300 rounded-full group-hover:bg-primary-500"></div>
                <a href="#{{ $id }}" class="text-gray-600 hover:text-primary-600">{{ $title }}</a>
            </div>
            @endforeach
        </div>
    </x-slot:sideNavigation>
</div>