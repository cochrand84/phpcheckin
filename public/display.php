
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<title>Dashboard Example</title>
<style type="text/css">
body, html { margin: 0; padding: 0; width: 100%; height: 100%; overflow: hidden; }
iframe { border: none; }
</style>
<script type="text/javascript">
var Dash = {
    nextIndex: 0,

    dashboards: [
        {url: "http://checkin.area51custom.com/public/display1.php", time: 10},
        {url: "http://checkin.area51custom.com/public/display2.php", time: 10},
        {url: "http://checkin.area51custom.com/public/display3.php", time: 10}
    ],

    display: function()
    {
        var dashboard = Dash.dashboards[Dash.nextIndex];
        frames["displayArea"].location.href = dashboard.url;
        Dash.nextIndex = (Dash.nextIndex + 1) % Dash.dashboards.length;
        setTimeout(Dash.display, dashboard.time * 1000);
    }
};

window.onload = Dash.display;
</script>
</head>
<body>
<iframe name="displayArea" width="100%" height="100%"></iframe>
</body>
</html>