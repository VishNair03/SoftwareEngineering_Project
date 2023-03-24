const load = () => {
    // add leading zeroes to a number to fit date value requirements
    const leadingZero = (val, chars) => {
        let str = (''+val).split('');
        while (str.length < chars) str.unshift('0');
        return str.join('');
    }

    document.querySelectorAll('input[type=date]').forEach(e => {
        const d = new Date();
        e.min = `${d.getFullYear()}-${leadingZero(d.getMonth()+1, 2)}-${leadingZero(d.getDate(), 2)}`;
    });

    const buttons = [...document.querySelectorAll('.flight-locations button')];
    const toSelect = document.querySelector('select');
    const header = document.querySelector('header');
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', () => {
            toSelect.selectedIndex = i;
            header.scrollIntoView();
        });
    }
}