<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Consultas Binance</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!-- Adicione um select para selecionar a moeda -->
<label for="moeda">Selecione a moeda:</label>
<select id="moeda" name="moeda">
    <option value="">Todas as moedas</option>
    @foreach ($data as $item)
        <option value="{{ $item['symbol'] }}">{{ $item['symbol'] }}</option>
    @endforeach
</select>

<!-- Adicione uma tabela para exibir os dados das moedas -->
<table>
    <thead>
        <tr>
            <th>Moeda</th>
            <th>Preço Atual</th>
            <th>Volume (USD)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr data-moeda="{{ $item['symbol'] }}">
                <td>{{ $item['symbol'] }}</td>
                <td>{{ $item['lastPrice'] }}</td>
                <td>{{ $item['quoteVolume'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
<!-- Adicione JavaScript para filtrar a tabela por moeda -->
<script>
    // Adicione um evento para atualizar a tabela quando a moeda selecionada mudar
    document.getElementById('moeda').addEventListener('change', function () {
        var moeda = this.value;
        var linhas = document.querySelectorAll('tr[data-moeda]');
        linhas.forEach(function (linha) {
            if (moeda && linha.getAttribute('data-moeda') !== moeda) {
                linha.style.display = 'none';
            } else {
                linha.style.display = '';
            }
        });
    });
</script>
</html>