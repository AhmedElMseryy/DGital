<span wire:loading.remove>
    {{ $name }}
</span>
<!-- Loading... -->
<div class="text-center" wire:loading wire:target='submit'>
    <span class="spinner-border spinner-border-sm text-white" role="status">
        <span class="visually-hidden">Loading...</span>
    </span>
</div>
