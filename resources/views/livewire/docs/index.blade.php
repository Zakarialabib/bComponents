<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

<div>
    <x-slot:title>BComponents - Documentation</x-slot:title>
    <x-slot:page_title>BComponents Documentation</x-slot:page_title>

    <div class="space-y-8">
        <!-- Introduction Section -->
        <section id="introduction">
            <h2 class="text-2xl font-bold mb-4">Introduction</h2>
            <p class="mb-4">
                BComponents is a comprehensive set of Laravel Blade components optimized for Laravel 11 and Livewire 3 with VOLT.
                Built with a modern tech stack, BComponents offers a seamless development experience with no controllers—only views and routes.
                The components are pure Laravel blade components enhanced with Alpine.js and styled with
                <a href="https://tailwindcss.com" class="text-blue-600 hover:underline">TailwindCSS</a>.
            </p>

            <x-b-alert type="info" dismissible="false" class="my-4">
                BComponents requires PHP 8.2+, Laravel 11+, and Livewire 3.0+. Make sure your project meets these requirements before installation.
            </x-b-alert>
        </section>

        <!-- Getting Started Section -->
        <section id="getting-started">
            <h2 class="text-2xl font-bold mb-4">Getting Started</h2>
            
            <h3 class="text-xl font-semibold mb-3" id="installation">Installation</h3>
            <p class="mb-2">1. Install via Composer:</p>
            <pre class="language-bash mb-4">
                <code>composer require zakarialabib/bcomponents</code>
            </pre>

            <p class="mb-2">2. Publish the assets (optional):</p>
            <pre class="language-bash mb-4">
                <code>php artisan vendor:publish --tag=bcomponents-config
php artisan vendor:publish --tag=bcomponents-views
php artisan vendor:publish --tag=bcomponents-assets</code>
            </pre>

            <p class="mb-2">3. Add the TailwindCSS configuration to your <code>tailwind.config.js</code> file:</p>
            <pre class="language-javascript mb-4">
                <code>module.exports = {
    content: [
        // ...
        './vendor/zakarialabib/bcomponents/src/resources/views/**/*.blade.php',
    ],
    // ...
}</code>
            </pre>

            <x-b-alert type="warning" dismissible="false" class="my-4">
                If you decide to work with these components without publishing, you can simply use them directly. Publishing is recommended for customization.
            </x-b-alert>
            
            <h3 class="text-xl font-semibold mb-3" id="basic-usage">Basic Usage</h3>
            <p class="mb-4">
                All components are prefixed with <code>x-b-</code> by default. You can customize this prefix in the configuration file.
            </p>
        </section>

        <!-- Component Categories -->
        <section id="component-categories">
            <h2 class="text-2xl font-bold mb-4">Component Categories</h2>
            
            <p class="mb-4">
                BComponents are organized into several categories to help you find the right component for your needs:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                <x-b-card title="Form Components" class="h-full">
                    <p>Input, Textarea, Select, Checkbox, Radio, Toggle, and more for building forms.</p>
                    <x-slot:footer>
                        <a href="#form-components" class="text-blue-600 hover:underline">View Form Components</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Layout Components" class="h-full">
                    <p>Card, Container, Grid, Flex, and more for structuring your UI.</p>
                    <x-slot:footer>
                        <a href="#layout-components" class="text-blue-600 hover:underline">View Layout Components</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Feedback Components" class="h-full">
                    <p>Alert, Toast, Modal, Progress, and more for user feedback.</p>
                    <x-slot:footer>
                        <a href="#feedback-components" class="text-blue-600 hover:underline">View Feedback Components</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Navigation Components" class="h-full">
                    <p>Navbar, Sidebar, Tabs, Breadcrumbs, and more for navigation.</p>
                    <x-slot:footer>
                        <a href="#navigation-components" class="text-blue-600 hover:underline">View Navigation Components</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Data Display Components" class="h-full">
                    <p>Table, List, Avatar, Badge, and more for displaying data.</p>
                    <x-slot:footer>
                        <a href="#data-display-components" class="text-blue-600 hover:underline">View Data Display Components</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Action Components" class="h-full">
                    <p>Button, ButtonGroup, IconButton, and more for user actions.</p>
                    <x-slot:footer>
                        <a href="#action-components" class="text-blue-600 hover:underline">View Action Components</a>
                    </x-slot:footer>
                </x-b-card>
            </div>
        </section>

        <!-- Form Components Section -->
        <section id="form-components">
            <h2 class="text-2xl font-bold mb-4">Form Components</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <x-b-card title="Input" class="h-full">
                    <p>Text input field with various options.</p>
                    <x-slot:footer>
                        <a href="/docs/components/input" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Textarea" class="h-full">
                    <p>Multi-line text input field.</p>
                    <x-slot:footer>
                        <a href="/docs/components/textarea" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Select" class="h-full">
                    <p>Dropdown selection field with options.</p>
                    <x-slot:footer>
                        <a href="/docs/components/select" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Checkbox" class="h-full">
                    <p>Checkbox input for boolean selections.</p>
                    <x-slot:footer>
                        <a href="/docs/components/checkbox" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Radio" class="h-full">
                    <p>Radio button input for single selections.</p>
                    <x-slot:footer>
                        <a href="/docs/components/radio" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="FormGroup" class="h-full">
                    <p>Group form elements with labels and validation.</p>
                    <x-slot:footer>
                        <a href="/docs/components/form-group" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
            </div>
            
            <p class="mb-4">
                <a href="/docs/components/form" class="text-blue-600 hover:underline">View all Form Components →</a>
            </p>
        </section>

        <!-- Layout Components Section -->
        <section id="layout-components">
            <h2 class="text-2xl font-bold mb-4">Layout Components</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <x-b-card title="Card" class="h-full">
                    <p>Container with header, body, and footer sections.</p>
                    <x-slot:footer>
                        <a href="/docs/components/card" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Container" class="h-full">
                    <p>Responsive container with customizable width.</p>
                    <x-slot:footer>
                        <a href="/docs/components/container" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Grid" class="h-full">
                    <p>CSS Grid layout system for responsive designs.</p>
                    <x-slot:footer>
                        <a href="/docs/components/grid" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Flex" class="h-full">
                    <p>Flexbox layout system for flexible designs.</p>
                    <x-slot:footer>
                        <a href="/docs/components/flex" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
            </div>
            
            <p class="mb-4">
                <a href="/docs/components/layout" class="text-blue-600 hover:underline">View all Layout Components →</a>
            </p>
        </section>

        <!-- Integration Section -->
        <section id="integration">
            <h2 class="text-2xl font-bold mb-4">Integration with Livewire and Alpine.js</h2>

            <p class="mb-4">
                BComponents are designed to work seamlessly with Livewire and Alpine.js. Learn how to integrate them:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <x-b-card title="Livewire Integration" class="h-full">
                    <p>Learn how to use BComponents with Livewire for reactive interfaces.</p>
                    <x-slot:footer>
                        <a href="/docs/integration/livewire" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Alpine.js Integration" class="h-full">
                    <p>Learn how to use BComponents with Alpine.js for client-side interactivity.</p>
                    <x-slot:footer>
                        <a href="/docs/integration/alpine" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
            </div>
        </section>

        <!-- Customization Section -->
        <section id="customization">
            <h2 class="text-2xl font-bold mb-4">Customization</h2>

            <p class="mb-4">
                BComponents are highly customizable. Learn how to customize them to fit your needs:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <x-b-card title="Configuration" class="h-full">
                    <p>Learn how to configure BComponents through the configuration file.</p>
                    <x-slot:footer>
                        <a href="/docs/customization/configuration" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="View Customization" class="h-full">
                    <p>Learn how to customize the component views to match your design.</p>
                    <x-slot:footer>
                        <a href="/docs/customization/views" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Styling" class="h-full">
                    <p>Learn how to customize the component styles with TailwindCSS.</p>
                    <x-slot:footer>
                        <a href="/docs/customization/styling" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
                
                <x-b-card title="Extending Components" class="h-full">
                    <p>Learn how to extend BComponents to create your own custom components.</p>
                    <x-slot:footer>
                        <a href="/docs/customization/extending" class="text-blue-600 hover:underline">View Documentation</a>
                    </x-slot:footer>
                </x-b-card>
            </div>
        </section>
    </div>
</div>

<x-slot:sideNavigation>
    <div class="space-y-2">
        <div class="font-medium text-lg mb-2">Documentation</div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#introduction">Introduction</a>
        </div>
        
        <div class="font-medium text-lg mt-4 mb-2">Getting Started</div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#installation">Installation</a>
        </div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#basic-usage">Basic Usage</a>
        </div>
        
        <div class="font-medium text-lg mt-4 mb-2">Components</div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#component-categories">Component Categories</a>
        </div>
        
        <div class="flex items-center">
            <div class="dot"></div><a href="#form-components">Form Components</a>
        </div>
        <div class="ml-4 space-y-1">
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/input">Input</a>
            </div>
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/textarea">Textarea</a>
            </div>
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/select">Select</a>
            </div>
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/form-group">FormGroup</a>
            </div>
        </div>
        
        <div class="flex items-center">
            <div class="dot"></div><a href="#layout-components">Layout Components</a>
        </div>
        <div class="ml-4 space-y-1">
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/card">Card</a>
            </div>
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/container">Container</a>
            </div>
        </div>
        
        <div class="flex items-center">
            <div class="dot"></div><a href="#feedback-components">Feedback Components</a>
        </div>
        <div class="ml-4 space-y-1">
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/alert">Alert</a>
            </div>
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/modal">Modal</a>
            </div>
        </div>
        
        <div class="flex items-center">
            <div class="dot"></div><a href="#action-components">Action Components</a>
        </div>
        <div class="ml-4 space-y-1">
            <div class="flex items-center">
                <div class="dot"></div><a href="/docs/components/button">Button</a>
            </div>
        </div>
        
        <div class="font-medium text-lg mt-4 mb-2">Integration</div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#integration">Livewire & Alpine.js</a>
        </div>
        
        <div class="font-medium text-lg mt-4 mb-2">Customization</div>
        <div class="flex items-center">
            <div class="dot"></div><a href="#customization">Customizing Components</a>
        </div>
    </div>
</x-slot:sideNavigation>