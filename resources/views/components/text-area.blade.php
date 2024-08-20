@props(['name' => '', 'data' => ''])

<label class="w-full form-control">
    <div class="label">
        <span class="label-text">{{ $slot }}</span>
    </div>
    <textarea name="{{ $name }}"
        class="h-24 textarea textarea-bordered {{ $errors->has($name) ? 'textarea-error' : '' }}" placeholder="Type here">{{ old($name, $data) }}</textarea>
    @error($name)
        <div class="label">
            <span class="text-red-500 label-text-alt">{{ $message }}</span>
        </div>
    @enderror
</label>
