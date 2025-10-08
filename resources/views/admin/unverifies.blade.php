<h1>UNVERIFIES</h1>
{{--[ {{ $data->sender_name }}--}}


@if( session('admin') != 'authed' )
    <script> window.location.href = "{{url('/')}}";</script>
@endif
unverified orders :

<br>
@if(session('action'))
    <div class="alert alert-success" style="text-align: center">
        {{ session('action') }}
    </div>
@endif
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
                <td>{{ $x->key == 1 ? "Rial" : "Lir"  }}</td>
                <td><a href="{{ route('verification' , ['id' => $x->id
//, 'user_id' => $x->user_id, 'key' => $x->key
]) }}"><button>V</button></a></td>
            </tr>

        @endforeach
    </table>

</div>

<br><br><br><br>
<br><br>
<div class="ff">
    <table>
        <tr>
            <th>Sender</th>
            <th>Amount</th>
            <th>Time</th>
{{--            <th>Type</th>--}}
            <th>X</th>
        </tr>
        @foreach($data2 as $y)

            <tr>
                <td>{{ $y->username }}</td>
                <td>{{ $y->mobile }}</td>
                <td>{{ $y->name ,  $y->lastname ,  }}</td>
{{--                <td>{{ $x->key == 1 ? "Rial" : "Lir"  }}</td>--}}
                <td><a href="{{ route('user.verification' , ['id' => $y->id]) }}"><button>V</button></a></td>
            </tr>

        @endforeach
    </table>

</div>

<br><br><br>
