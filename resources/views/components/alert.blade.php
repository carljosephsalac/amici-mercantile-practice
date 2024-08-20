<div role="alert" class="mx-auto alert alert-success w-fit js-alert">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 stroke-current shrink-0" fill="none" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
    <span>{{ $slot }}</span>
</div>

<script defer>
    setTimeout(() => {
        document.querySelector('.js-alert').remove();
    }, 2000);
</script>
