const vue = require('./vue');

require('./bootstrap');

var content = new vue({
    el: '#content',
    methods: {
        xtimesClose: function (el) {
            el.target.parentNode.remove();
        }
    }
})