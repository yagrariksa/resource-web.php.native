<script>
    const btnNavMenu = document.querySelector('#navbar-menu');

    btnNavMenu.addEventListener('click', e => {
        e.preventDefault();

        // alert("navigate!")
        window.location.assign('/list-menu.php');
    })

    document.querySelector('#hero').addEventListener('click', () => {
        window.location.assign('/example.php');
    })

    document.querySelectorAll('.card-menu').forEach(card => {
        card.addEventListener('click', () => {
            window.location.assign('/detail-menu.php');
        })
    })
</script>