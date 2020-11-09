<script>
    toastr.options = {
        "closeButton": 1,
        "positionClass": "toast-top-right",
        "timeOut": 10000,
        "progressBar": true,
    }

    let toastrInfo = {
        type: `{{ Session::get("toastrInfo")['type'] }}`,
        messenger: `{{ Session::get("toastrInfo")['messenger'] }}`
    };

    toastr[toastrInfo.type](toastrInfo.messenger);
</script>
