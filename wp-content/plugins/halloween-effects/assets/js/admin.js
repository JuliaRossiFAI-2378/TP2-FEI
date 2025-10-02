jQuery(document).ready(function($) {
    $('.halloween-color-field').wpColorPicker();

    var applyToSelect = $('#apply_to_select');
    var selectedPageSelect = $('#selected_page_select');

    function toggleSelectPage() {
        if (applyToSelect.val() === 'single') {
            selectedPageSelect.prop('disabled', false);
        } else {
            selectedPageSelect.prop('disabled', true);
        }
    }
    toggleSelectPage();
    applyToSelect.on('change', toggleSelectPage);
});
