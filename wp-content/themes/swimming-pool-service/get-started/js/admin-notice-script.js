jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'swimming_pool_service_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});

// Plugin – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const swimming_pool_service_button = document.getElementById('install-activate-button');
    const swimming_pool_service_config = window.installPluginData;

    if (!swimming_pool_service_button || !swimming_pool_service_config) return;

    swimming_pool_service_button.addEventListener('click', function (e) {
        e.preventDefault();

        const swimming_pool_service_redirectUrl = swimming_pool_service_button.getAttribute('data-redirect') || swimming_pool_service_config.redirectUrl;

        swimming_pool_service_button.textContent = 'Setting up plugins...';

        const swimming_pool_service_installData = new FormData();
        swimming_pool_service_installData.append('action', 'install_and_activate_required_plugin');
        swimming_pool_service_installData.append('nonce', swimming_pool_service_config.nonce);

        fetch(swimming_pool_service_config.ajaxurl, {
            method: 'POST',
            body: swimming_pool_service_installData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success) {
                window.location.href = swimming_pool_service_redirectUrl;
            } else {
                alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                swimming_pool_service_button.textContent = 'Try Again';
            }
        })
        .catch(error => {
            alert('Request failed: ' + error.message);
            swimming_pool_service_button.textContent = 'Try Again';
        });
    });
});
