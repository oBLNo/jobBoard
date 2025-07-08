<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Titel" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD"/>
        <x-forms.input label="Location" name="salary" placeholder="Winter Park, Florida"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>


        <x-forms.input label="URL" name="url" placeholder="https://laravel.com/jobs/ceo-wanted"/>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tag (comma seperated)" name="tag" placeholder="laravel, video, education"/>

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>


</x-layout>
