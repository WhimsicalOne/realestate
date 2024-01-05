<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.addEventListener('process-swall', event => {
        let type = event.detail[0].type;
        let message = type === 'success' ? 'Successfully added into the mailing list. Please check your inbox.' : 'Error. Please try again.';
        let camelCaseType = type === 'success' ? 'Success' : 'Error';
        Swal.fire(
            camelCaseType,
            message,
            type
        )
    })
</script>
