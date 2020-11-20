const app = new Vue({
    el: '#rating',
    data: {
        'user': false,
        'password': 'bizboldurabyz',
        'inputtedPassword': '',
        ratingData: [
            { name: 'Nuraly', tmf: 0, book: 476, tjn: 150, git: 130, randomizer: 0 },
            { name: 'Durdy', tmf: 0, book: 250, tjn: 150, git: 0, randomizer: 150 },
            { name: 'Şirgeldi', tmf: 0, book: 35, tjn: 0, git: 0, randomizer: 0 },
            { name: 'Atajan', tmf: 150, book: 121, tjn: 0, git: 150, randomizer: 0 },
            { name: 'Baýram', tmf: 0, book: 0, tjn: 0, git: 0, randomizer: 0 },
            { name: 'Aman', tmf: 0, book: 0, tjn: 0, git: 0, randomizer: 0 },
        ]
    },
    methods: {
        checkPassword: function () {
            if (this.password == this.inputtedPassword) {
                // return true;
                this.user = true;
            }
        }
    },
    // computed: {
    //     orderedUsers: function () {
    //         return _.orderBy(this.ratingData, 'name')
    //     }
    // }
});