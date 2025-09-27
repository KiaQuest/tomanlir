<h1>UNVERIFIES</h1>
{{--[ {{ $data->sender_name }}--}}



unverified orders :

<style>
    table, th, td {
        border:1px solid black;
        /*width: 10em;*/
        text-align: center;
        padding: .4rem;
    }
    .ff {
        /*text-align: center;*/
        display: flex;
        justify-content: center;

    }
</style>
<br><br>
<div class="ff">
    <table>
        <tr>
            <th>Sender</th>
            <th>Amount</th>
            <th>Time</th>
            <th>Type</th>
            <th>X</th>
        </tr>
        @foreach($data as $x)

            <tr>
                <td>{{ $x->sender_name }}</td>
                <td>{{ $x->amount }}</td>
                <td>{{ $x->time }}</td>
                <td>{{ $x->key = 1 ? "Lir" : "Rial"  }}</td>
                <td><a href="{{ route('verification' , ['id' => $x->id]) }}"><button>V</button></a></td>
            </tr>

        @endforeach
    </table>
</div>
