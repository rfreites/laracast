@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>
                Example page header <small>Subtext for header</small>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            @include('blade-tutorial.partials.panel', [
               'panelHeading' => 'Hello World'
            ])
        </div>
        <div class="col-sm-4">
            @component('blade-tutorial.partials.panel')

              @slot('panelHeading')

                Hello Component

              @endslot

              @slot('description')

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices nisi id eros vestibulum sodales. In tellus risus, convallis at viverra quis, bibendum blandit turpis. Nulla a lobortis ex. Donec quis leo ut odio facilisis vestibulum. Vestibulum scelerisque magna sit amet malesuada efficitur. Cras sit amet sem enim.

              @endslot

            @endcomponent
        </div>
        <div class="col-sm-4">
            @component('blade-tutorial.partials.panel2')

                @slot('panelHeading')

                    Hello Component

                @endslot

                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices nisi id eros vestibulum sodales. In tellus risus, convallis at viverra quis, bibendum blandit turpis. Nulla a lobortis ex. Donec quis leo ut odio facilisis vestibulum. Vestibulum scelerisque magna sit amet malesuada efficitur. Cras sit amet sem enim.

            @endcomponent
        </div>
    </div>
</div>
@endsection
