let flashData = $('.flash-data').data('flashdata');

if (flashData) {
    setTimeout(function () {
        swal('Deleted !', 'Data obat Sudah ada', 'error')
    }, 10);
    window.setTimeout(function () {

    }, 1100);
}
