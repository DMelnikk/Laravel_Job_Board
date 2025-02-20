<x-layout>
    <x-bread-crumbs class="mb-4"
                    :links="['Jobs'=>route('jobs.index')]"/>
    @foreach($jobs as $job)
       <x-job-card class="mb-4" :job="$job">
           <div>
               <x-link-butt :href="route('jobs.show', $job)">
                   Show
               </x-link-butt>
           </div>
       </x-job-card>
    @endforeach
</x-layout>



