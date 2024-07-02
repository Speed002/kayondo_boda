<div class="mt-3" 
    x-data="{
    dropping: false,
    progress:0,
        handleDrop(event){
            @this.uploadMultiple(
                'files',
                Array.from(event.dataTransfer?.files || event.target.files),
                (uploadedFilename) => {
                    this.progress = 0
                },
                (e) => {
                    this.progress = 0
                },
                (e) => {
                    this.progress = e.detail.progress
                }
            )
        }

    }"
>
<div
    x-on:dragover.prevent="dropping = true"
    x-on:dragleave.prevent="dropping = false"
    x-on:drop.prevent="handleDrop($event)"

    x-bind:class="{
        'drop-zone-border-dark' : dropping,
        'drop-zone-border-light' : !dropping
    }"

    id="drop-zone" class="mx-auto slate-light">

  <label for="file-input">
    <p>Drag & drop {{$client->name}}'s files here or click to browse</p>
    <input type="file" id="file-input" class="d-none" multiple x-on:change="handleDrop">
  </label>
  <a href="#" type="button" class="text-primary mt-2" id="browse-btn" onclick="document.getElementById('file-input').click()">Upload a file</a>
</div>
@error('files.*')<span class="text-danger">{{$message}}</span>@enderror
<div class="progress mt-3" x-show="progress" x-cloak>
    <div class="progress-bar" role="progressbar" x-bind:style="`width: ${progress}%;`" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
