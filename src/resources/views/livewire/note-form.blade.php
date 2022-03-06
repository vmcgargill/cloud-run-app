<div>
    <div>
        <label for="note-text">Note</label><br>
        <textarea name="note" id="note" cols="50" rows="10" wire:model="note"></textarea>
    </div>
    <div>
        @error('note') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mt-4 mb-4">
        <button type="button" wire:click.prevent="submit" style="padding: 10px; border-radius: 5px; cursor: pointer;">
            Submit
        </button>
    </div><br><br>
    <div class="mt-5">
        <table>
            @foreach($notes as $n)
                <tr>
                    <td>
                        {{$n->note}}
                    </td>
                    <td>
                        <button type="button" wire:click.prevent="delete({{$n->id}})" style="padding: 10px; border-radius: 5px; cursor: pointer; color: white; background: red;">Delete</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
