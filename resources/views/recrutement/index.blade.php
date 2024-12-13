<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nouvelle demande') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('createRecrutment') }}">
                        @csrf
                
                        <!-- titre -->
                        <div>
                            <x-input-label for="titre" :value="__('Titre')" />
                            <x-text-input id="titre" class="block mt-1 w-full" type="text" name="titre" :value="old('titre')" required autofocus autocomplete="titre" />
                            <x-input-error :messages="$errors->get('titre')" class="mt-2" />
                        </div>
                        <!-- Lieu -->
                        <div>
                            <x-input-label for="lieu" :value="__('Lieu')" />
                            <x-text-input id="lieu" class="block mt-1 w-full" type="text" name="lieu" :value="old('lieu')" required autofocus autocomplete="lieu" />
                            <x-input-error :messages="$errors->get('lieu')" class="mt-2" />
                        </div>
                        <!-- Descriptif entreprise -->
                        <div class="mt-4">
                            <x-input-label for="desciptif_entreprise" :value="__('Desciptif entreprise')" />
                            <x-text-input name="descriptif_entreprise" class="block mt-1 w-full" type="text" :value="old('desciptif_entreprise')" required autofocus autocomplete="desciptif_entreprise"  />
                            <x-input-error :messages="$errors->get('desciptif_entreprise')" class="mt-2" />
                        </div>
                        <!-- Descriptif entreprise -->
                        <div class="mt-4">
                            <x-input-label for="descriptif_poste" :value="__('Desciptif poste')" />
                            <x-text-input name="descriptif_poste" class="block mt-1 w-full" type="text" name="descriptif_poste" :value="old('descriptif_poste')" required autofocus autocomplete="descriptif_poste"  />
                            <x-input-error :messages="$errors->get('descriptif_poste')" class="mt-2" />
                        </div>
                        <!-- Descriptif entreprise -->
                        <div class="mt-4">
                            <x-input-label for="profil" :value="__('Profil recherché')" />
                            <x-text-input id="profil" class="block mt-1 w-full" type="text" name="profil" :value="old('profil')" required autofocus autocomplete="profil" />
                            <x-input-error :messages="$errors->get('profil')" class="mt-2" />
                        </div>
                        <!-- Competences -->
                        <div>
                            <x-input-label for="competences" :value="__('Competences')" />
                            <x-text-input id="competences" class="block mt-1 w-full" type="text" name="competences" :value="old('competences')" required autofocus autocomplete="competences" />
                            <x-input-error :messages="$errors->get('lieu')" class="mt-2" />
                        </div>
                        <!-- Formation -->
                        <div>
                            <x-input-label for="formation" :value="__('Formations')" />
                            <x-text-input id="formation" class="block mt-1 w-full" type="text" name="formation" :value="old('formations')" required autofocus autocomplete="formations" />
                            <input type="hidden" name="status" value="En cours">
                            <x-input-error :messages="$errors->get('lieu')" class="mt-2" />
                        </div>

                        <!-- Experiences -->
                        <div>
                            <x-input-label for="experiences" :value="__('Experiences')" />
                            <x-text-input id="experiences" class="block mt-1 w-full" type="text" name="experiences" :value="old('experiences')" required autofocus autocomplete="experiences" />
                            <x-input-error :messages="$errors->get('lieu')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="type_recrutement" :value="__('Type de recrutement')" />
                            <select name="type_recrutement" id="type_recrutement" class="bg-gray-50 mt-2 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="" disabled>choisir un type</option>
                                @foreach($type as $type)
                                <option value="{{$type->id}}">{{$type->type_recrutement}}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('type_recrutement')" class="mt-2" />
                        </div>
                
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Soumettre') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#profil'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush
</x-app-layout>