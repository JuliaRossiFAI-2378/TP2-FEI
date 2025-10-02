/* CSS */
import './index.scss';

/* WordPress */
import apiFetch from '@wordpress/api-fetch';

/* Local */
class PatternsPortfolioPluginApi {
    constructor() {
        this.nonce = PatternsPortfolioLocalize.nonce;
        this.bindEvents();
    }

    bindEvents() {
        document.addEventListener('click', (event) => {
            if (event.target.classList.contains('patterns-portfolio-install-plugin')) {
                event.target.classList.add("patterns-portfolio-processing");
                this.installPlugin(event.target);
            }
        });
    }

    async installPlugin(el) {
        const pluginData = el.dataset.plugin;
        const plugin = JSON.parse(pluginData);
        try {
            const result = await apiFetch({
                path: 'patterns-portfolio/v1/install-plugin',
                method: 'POST',
                data: plugin,
                headers: {
                    'X-WP-Nonce': this.nonce
                }
            });
            if (result) {
                if (result.success) {
                    el.innerText = el.dataset.successText;
                    el.disabled = true;
                    el.classList.remove('patterns-portfolio-install-plugin');
                } else {
                    el.innerText = el.dataset.failText;
                }
            }
        } catch (error) {
            console.error(error);
            el.innerText = el.dataset.failText;
        }
        el.classList.remove("patterns-portfolio-processing");
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new PatternsPortfolioPluginApi();
});
