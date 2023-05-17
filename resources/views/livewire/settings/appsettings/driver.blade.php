<x-form noClass="true" action="saveDriverSettings">
    <div class='grid grid-cols-1 gap-4 mb-10 md:grid-cols-2 lg:grid-cols-3'>

        <div class="block mt-4 text-sm">
            <p>{{ __('Allow taxi driver to switch to regular driver') }}</p>
            <x-checkbox title="{{ __('Enable') }}" name="enableDriverTypeSwitch" :defer="true" />
        </div>

        <div class="block mt-4 text-sm">
            <x-input title="{{ __('Accept Time Duration(seconds)') }}" name="alertDuration" type="number" />
        </div>

        <div class="block mt-4 text-sm">
            <x-input title="{{ __('Driver order search radius') }}(KM)" name="driverSearchRadius" type="number" />
        </div>

        <div class="block mt-4 text-sm">
            <x-input title="{{ __('Driver Max Acceptable Order') }}" name="maxDriverOrderAtOnce" type="number" />
        </div>
        <div class="block mt-4 text-sm">
            <x-input title="{{ __('Number of driver to be notified of new order') }}"
                name="maxDriverOrderNotificationAtOnce" type="number" />
        </div>
        <div class="block mt-4 text-sm">
            <x-input title="{{ __('Resend rejected auto-assignment notification(minutes)') }}"
                name="clearRejectedAutoAssignment" type="number" />
        </div>

        <div class="block mt-4 text-sm">
            <x-input title="{{ __('Emergency Contact for drivers and customers') }}" name="emergencyContact" />
        </div>

        {{-- Location updating --}}
        <div class="block mt-4 text-sm">
            <x-input title="{{ __('Location Update Distance(Meter)') }}" name="distanceCoverLocationUpdate" />
        </div>
        <div class="block mt-4 text-sm">
            <x-input title="{{ __('Location Update Time(Seconds)') }}" name="timePassLocationUpdate" />
        </div>
        <div class="block mt-4 text-sm">
            <x-select title="{{ __('Auto-Assignment Status') }}" :options="$statuses ?? []" name="autoassignmentStatus" />
        </div>
        <div class="block mt-4 text-sm">
            <x-select title="{{ __('Auto-Assignment System') }}" :options="$systemTypes ?? []" name="autoassignmentsystem" />
        </div>
    </div>
    {{-- save button --}}
    <div class="flex justify-end mt-4">
        <x-buttons.primary class="ml-4">
            {{ __('Save') }}
        </x-buttons.primary>
    </div>
</x-form>
