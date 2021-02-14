extends('layouts.app')

@section('content')
  <section>
    <h2>以下はVueコンポーネントです</h2>
    <foo-bar
      :prop-sample-price='@json($sample->price)'
      endpoint="{{ route('sample.update', ['sample' => $sample]}}" 
    ></foo-bar>
  </section>
@endsection