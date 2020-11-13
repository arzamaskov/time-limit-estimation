<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- Bootstrap CSS local fallback -->
<script>
    var test = document.createElement("div");
    test.className = "hidden d-none";

    document.head.appendChild(test);
    var cssLoaded = window.getComputedStyle(test).display === "none";
    document.head.removeChild(test);

    if (!cssLoaded) {
        var link = document.createElement("link");
        link.type = "text/css";
        link.rel = "stylesheet";
        link.href = "/assets/css/bootstrap.min.css";

        document.head.appendChild(link);
    };
</script>

<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/css/main.css">
