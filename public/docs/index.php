<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Legacy App Public API</title>
    <script src="https://unpkg.com/@stoplight/elements/web-components.min.js?v=<?=date('Ymdhis')?>"></script>
    <link rel="stylesheet" href="https://unpkg.com/@stoplight/elements/styles.min.css?v=<?=date('Ymdhis')?>">
</head>
<body>
<elements-api
    apiDescriptionUrl="/docs/public-openapi.yml?v=<?=date('Ymdhis')?>"
    router="hash"
/>
</body>
</html>
