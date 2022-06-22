window.onload = (e) => {
    // const buttondis = document.getElementById("buttonCalendar");
    const linkedPicker1Element = document.getElementById("linkedPickers1");
    const linked1 = new tempusDominus.TempusDominus(linkedPicker1Element);
    const linked2 = new tempusDominus.TempusDominus(
        document.getElementById("linkedPickers2"),
        {
            useCurrent: false,
        }
    );

    //using event listeners
    linkedPicker1Element.addEventListener(
        tempusDominus.Namespace.events.change,
        (e) => {
            linked2.updateOptions({
                restrictions: {
                    minDate: e.detail.date,
                },
            });
            console.log(e.detail.date);
        }
    );

    //using subscribe method
    const subscription = linked2.subscribe(
        tempusDominus.Namespace.events.change,
        (e) => {
            linked1.updateOptions({
                restrictions: {
                    maxDate: e.date,
                },
            });
            console.log(e.date);
        }
    );
};
