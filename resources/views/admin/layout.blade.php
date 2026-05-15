<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Eczar&display=swap"/>
    <link rel="stylesheet" href="/styles.css" />
</head>

<div class="admin-panel">
    <table>
        <tr>
            <td colspan="4">
                <div class="admin-title">Admin Panel</div>
            </td>
        </tr>
        <tr>
            <td>
                <a href="/admin/types">List</a>
            </td>
            <td>
                <a href="/admin/types/create">Add</a>
            </td>
            <td>
                <a href="/logout">Logout</a>
            </td>
            <td>
                <a href="/types">Frontend</a>
            </td>
        </tr>
    </table>
</div>


<div>
@yield('content')
</div>

