$(document).ready(function() {

    $( ".validate-input" ).on( "input", function() {

        var name = this.name;
        this.setCustomValidity('');
        this.checkValidity();
        console.log(this.validity);

        if (this.validity.patternMismatch) {
            $( "[name=" + name + "]" ).addClass("is-invalid");
            $( "#" + name + "_feedback" ).html("Dati neatbilst šablonam").show();
        } else if (this.validity.valueMissing) {
            $( "[name=" + name + "]" ).addClass("is-invalid");
            $( "#" + name + "_feedback" ).html("Lauks ir obligāts").show();
        } else if (this.validity.tooShort) {
            $( "[name=" + name + "]" ).addClass("is-invalid");
            $( "#" + name + "_feedback" ).html("Par īsu").show();
        } else if (this.validity.valid) {
            this.setCustomValidity('');
            $( "[name=" + name + "]" ).removeClass("is-invalid");
        }
    });

    $(".alert-success").fadeTo(2000, 500).slideUp(500, function() {
        $(".alert-success").alert('close')
    });

    $(".datepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        showOtherMonths: true,
        selectOtherMonths: true
    });

});