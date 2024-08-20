@props(['name' => '', 'data' => ''])

<label class="w-full form-control">
    <div class="label">
        <span class="label-text">{{ $slot }}</span>
    </div>
    <input {{ $attributes->merge(['type' => 'text']) }} name="{{ $name }}" placeholder="Type here"
        class="w-full input input-bordered {{ $errors->has($name) ? 'input-error' : '' }}"
        value="{{ old($name, $data) }}" />
    @error($name)
        <div class="label">
            <span class="text-red-500 label-text-alt">{{ $message }}</span>
        </div>
    @enderror
</label>
