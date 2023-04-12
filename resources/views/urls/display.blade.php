<link rel="stylesheet" type="text/css" href="{{ asset('css/display.css') }}">

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>URL</th>
            <th>Short URL</th>
            <th>Created Date</th>
            <th>Copy</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($urls as $url)
        <tr>
            <td>{{ $url->title }}</td>
            <td>{{ $url->url }}</td>
            <td>{{ $url->short_url }}</td>
            <td>{{ $url->created_at }}</td>
            <td>
                <button onclick="copyToClipboard('{{ $url->short_url }}')">Copy</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<script>
    function copyToClipboard(text) {
        var input = document.createElement('input');
        input.setAttribute('value', text);
        document.body.appendChild(input);
        input.select();
        document.execCommand('copy');
        document.body.removeChild(input);
    }
</script>
