<x-layout>
    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <p class="text-center">Log in om bezig te gaan met je eigen kilometerregistratie.</p>
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
            <p class="text-center">Er staan nog geen ritten in de rittendatabase.</p>
        @endif
    </main>
    @auth                
    <form method="POST" action="/register" class="mt-10">
        @csrf
        <x-form.input name="ritten" required />
        <x-form.input name="datum" required />
        <x-form.input name="omschrijving" required />
        <x-form.input name="kilometers" required />
        <x-form.input name="retour" required />
        <x-form.button>Versturen</x-form.button>
    </form>
    {{ echo: $_GET [$categories()->ritten] }}
    @endauth
</x-layout>
