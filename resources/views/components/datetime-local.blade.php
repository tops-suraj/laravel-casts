<x-form-group
    {{ $attributes->only(['x-show', 'x-if']) }}
    :class="$groupClasses"
    :errorData="$errorData"
    :helpText="$helpText"
    :name="$name"
>
    <input
        {{ $attributes->except(['x-show', 'x-if']) }}
        type="datetime-local"
        :name="$name"
        :value="$value"
    >
</x-form-group>
