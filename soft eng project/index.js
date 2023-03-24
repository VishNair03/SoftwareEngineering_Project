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

    
}