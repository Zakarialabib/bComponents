<?php

use function Livewire\Volt\{state, layout, title};
use Livewire\Volt\Component;

layout('layouts.guest');

?>

<div>
    <x-slot:title>Alert Component</x-slot:title>
    <x-slot:page_title>Alert</x-slot:page_title>
    
    <div id="intro">
        <p class="mb-4">
            The Alert component provides a flexible notification system with extensive customization options. Built with 
            Tailwind CSS and Alpine.js, it supports multiple types, positions, animations, and interactive features while 
            maintaining accessibility standards.
        </p>
        
        <p class="font-semibold mb-2">Key Features:</p>
        <ul class="list-disc pl-6 mb-4">
            <li>Multiple alert types (info, success, warning, danger/error)</li>
            <li>Custom positioning and animations</li>
            <li>Sound notifications and action buttons</li>
            <li>Queue system for multiple alerts</li>
            <li>Responsive design with size variations</li>
            <li>Accessibility compliant (ARIA roles)</li>
        </ul>
    </div>

    <h2 class="text-2xl font-bold mt-8 mb-4">Basic Usage</h2>
    
    <h3 class="mt-4">Info Alert</h3>
    <x-b-alert type="info" show-icon class="mb-3">
        Your subscription is expiring in 19 days. 
        <a href="#" class="font-semibold hover:underline">Renew now</a>
    </x-b-alert>
    <pre class="language-markup line-numbers"><code>
        &lt;x-b-alert type="info" show-icon>
            Your subscription is expiring in 19 days.
            &lt;a href="#"&gt;Renew now&lt;/a&gt;
        &lt;/x-b-alert&gt;
    </code></pre>

    <h3 class="mt-4">Success Alert</h3>
    <x-b-alert type="success" show-icon dismissible class="mb-3">
        Files uploaded successfully
    </x-b-alert>
    <pre class="language-markup line-numbers"><code>
        &lt;x-b-alert type="success" show-icon dismissible>
            Files uploaded successfully
        &lt;/x-b-alert&gt;
    </code></pre>

    <h3 class="mt-4">Error Alert</h3>
    <x-b-alert type="error" show-icon title="Upload Failed" class="mb-3">
        File size exceeds maximum limit
    </x-b-alert>
    <pre class="language-markup line-numbers"><code>
        &lt;x-b-alert type="error" show-icon title="Upload Failed"&gt;
            File size exceeds maximum limit
        &lt;/x-b-alert&gt;
    </code></pre>

    <h2 class="text-2xl font-bold mt-8 mb-4">Advanced Features</h2>

    <h3 class="mt-4">Positioned Alert</h3>
    <x-b-alert type="warning" position="bottom-right" duration="5000" class="mb-3">
        Auto-dismissing bottom-right alert
    </x-b-alert>
    <pre class="language-markup line-numbers"><code>
        &lt;x-b-alert 
            type="warning"
            position="bottom-right"
            duration="5000"&gt;
            Auto-dismissing bottom-right alert
        &lt;/x-b-alert&gt;
    </code></pre>

    <h3 class="mt-4">Alert with Actions</h3>
    <x-b-alert 
        type="info"
        :actions="[
            ['label' => 'View Details', 'url' => '#'],
            ['label' => 'Dismiss', 'method' => 'dismiss']
        ]"
        class="mb-3">
        Session will expire in 5 minutes
    </x-b-alert>
    <pre class="language-markup line-numbers"><code>
        &lt;x-b-alert
            type="info"
            :actions="[
                ['label' => 'View Details', 'url' => '#'],
                ['label' => 'Dismiss', 'method' => 'dismiss']
            ]"&gt;
            Session will expire in 5 minutes
        &lt;/x-b-alert&gt;
    </code></pre>

    <h2 class="text-2xl font-bold mt-8 mb-4">Component Attributes</h2>
    
    <x-b-table striped>
        <x-slot name="header">
            <th>Attribute</th>
            <th>Type</th>
            <th>Default</th>
            <th>Description</th>
        </x-slot>
        
        <tr><td>type</td><td>string</td><td>info</td><td>Alert type (info, success, warning, danger, error)</td></tr>
        <tr><td>dismissible</td><td>bool</td><td>false</td><td>Show close button</td></tr>
        <tr><td>show</td><td>bool</td><td>true</td><td>Initial visibility state</td></tr>
        <tr><td>show-icon</td><td>bool</td><td>true</td><td>Display type icon</td></tr>
        <tr><td>title</td><td>string|null</td><td>null</td><td>Alert heading text</td></tr>
        <tr><td>icon</td><td>string|null</td><td>null</td><td>Custom icon (SVG or icon component)</td></tr>
        <tr><td>position</td><td>string</td><td>top-right</td><td>Display position (top/bottom)-(left/right/center)</td></tr>
        <tr><td>duration</td><td>number|null</td><td>null</td><td>Auto-dismiss timeout in milliseconds</td></tr>
        <tr><td>sound</td><td>bool</td><td>false</td><td>Enable sound notification</td></tr>
        <tr><td>sound-src</td><td>string|null</td><td>null</td><td>Custom sound file URL</td></tr>
        <tr><td>animation</td><td>string</td><td>fade</td><td>Enter/exit animation (fade, slide-*)</td></tr>
        <tr><td>size</td><td>string</td><td>md</td><td>Alert size (sm, md, lg)</td></tr>
        <tr><td>persistent</td><td>bool</td><td>false</td><td>Prevent auto-dismissal</td></tr>
        <tr><td>close-on-click</td><td>bool</td><td>false</td><td>Dismiss on click outside</td></tr>
        <tr><td>close-on-esc</td><td>bool</td><td>true</td><td>Dismiss on ESC key</td></tr>
        <tr><td>queue</td><td>bool</td><td>false</td><td>Enable alert queuing</td></tr>
        <tr><td>queue-group</td><td>string</td><td>default</td><td>Queue group identifier</td></tr>
        <tr><td>html</td><td>bool</td><td>false</td><td>Allow raw HTML content</td></tr>
        <tr><td>role</td><td>string</td><td>alert</td><td>ARIA role attribute</td></tr>
        <tr><td>description</td><td>string|null</td><td>null</td><td>Alternative to slot content</td></tr>
        <tr><td>actions</td><td>array</td><td>[]</td><td>Action buttons configuration</td></tr>
        <tr><td>class</td><td>string</td><td></td><td>Additional CSS classes</td></tr>
    </x-b-table>

    <x-slot:sideNavigation>
        <div class="flex items-center"><div class="dot"></div><a href="#intro">Introduction</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#basic-usage">Basic Usage</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#advanced-features">Advanced Features</a></div>
        <div class="flex items-center"><div class="dot"></div><a href="#attributes">Attributes</a></div>
    </x-slot:sideNavigation>
</div>