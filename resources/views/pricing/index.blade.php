@foreach($plans as $plan)
    <div>
        <h2>{{ $plan->name }}</h2>
        <p>{{ $plan->description }}</p>
        <p>${{ $plan->price }}/month</p>
        <a href="{{ route('subscribe', ['plan' => $plan->id]) }}">Subscribe</a>
    </div>
@endforeach
