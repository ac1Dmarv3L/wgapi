document.addEventListener("DOMContentLoaded", function () {
    const games = ['.wot', '.wotb', '.wotx', '.wows', '.wowp', '.wgn'];
    const infos = ['.wotinfo', '.wotbinfo', '.wotxinfo', '.wowsinfo', '.wowpinfo', '.wgninfo'];

    games.forEach((game, index) => {
        const gameButton = document.querySelector(game);
        const info = document.querySelector(infos[index]);

        gameButton.addEventListener('click', function (event) {
            event.preventDefault();
            infos.forEach((info, i) => {
                if (i === index) {
                    document.querySelector(info).classList.remove('hidden');
                    document.querySelector(info).classList.add('flex');
                } else {
                    document.querySelector(info).classList.add('hidden');
                    document.querySelector(info).classList.remove('flex');
                }
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const wotMenuButton = document.getElementById('wot-menu-button');
    const wotDropdownMenu = document.getElementById('wot-dropdown-menu');
    const wotbMenuButton = document.getElementById('wotb-menu-button');
    const wotbDropdownMenu = document.getElementById('wotb-dropdown-menu');

    wotMenuButton.addEventListener('click', function (event) {
        event.preventDefault();
        wotDropdownMenu.classList.toggle('hidden');
        wotDropdownMenu.classList.toggle('flex');
    });

    wotbMenuButton.addEventListener('click', function (event) {
        event.preventDefault();
        wotbDropdownMenu.classList.toggle('hidden');
        wotbDropdownMenu.classList.toggle('flex');
    });
});


