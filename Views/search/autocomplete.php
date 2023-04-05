<!DOCTYPE html>
<html>
<head>
    <title>Auto-complete search box</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <div class="ui-widget">
        <label for="search">Search: </label>
        <input id="search">
    </div>

    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#search").autocomplete({
                source: "<?= base_url('Controllers/Search') ?>",
                minLength: 2 // Minimum number of characters to trigger the auto-complete functionality
            });
        });
    </script>
</body>
</html>