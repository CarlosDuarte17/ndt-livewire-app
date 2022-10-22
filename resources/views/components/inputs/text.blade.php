@props(['id', 'label' => ''])
@if($label)
  <label for="{{ $id }}" class="text-sm font-medium text-gray-900 block mb-2">{{ $label }}</label>
@endif
<input
  name="{{ $id }}"
  id="{{ $id }}"
  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
  {{ $attributes }}
/>
