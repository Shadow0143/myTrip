<thead>
    <tr>
        <th>Sl.No</th>
        <th>Enq. Id</th>
        <th>Journey Date</th>
        <th>Name</th>
        <th>Email Id</th>
        <th>Contact No.</th>
        <th>Lead Source</th>
        <th>Lead Type</th>
        <th>Date of Entry</th>
        <th>Entered By</th>
        <th>Status</th>
        <th>History</th>
        <th>Emp Feedback</th>
        <th>Rank</th>
        <th>Assign To</th>
        <th>URL</th>
    </tr>
</thead>
@if (count($data) > 0)
<tbody>
    @foreach ($data as $key=>$item)
    <tr>
        <td>{{ $key+1}}</td>
        <td>
            <a target="_blank" href="{{ route('leadsDetailsEdit',['id'=>$item->id]) }}">{{ $item['enqueryID'] }}</a>

        </td>
        <td>
            <div class="input-group date" data-target-input="nearest">
                <input type="date" name="jurneyDate" class="datePickerajax" id="jurneyDate" data-id="{{ $item['id'] }}" data-type="jurneyDate" value="{{ $item['jurneyDate'] }}" />
            </div>
        </td>
        <td>{{ $item['customerName'] }}</td>
        <td>
            <div class="fieldbox">
                {{-- <a href="{{ route('email',['id'=>$item->email]) }}"> --}}
                <a target="_blank" href="{{ url('/admin/email') }}/{{ $item['enqueryID']  }}">
                    {{-- <a href="#">  --}}
                    <span id="mail00" style="display: block;">{{ $item['email'] }}</span>
                </a>
            </div>
        </td>
        <td>
            <div class="fieldbox">
                <span class="phone0" id="phone0" style="display: block;">{{ $item['contactNumber'] }}</span>
                <div class="phonefld" id="phonefld"><input class="form-control phoneajax" type="text" placeholder="" value="{{ $item['contactNumber'] }}" name="phone" data-id="{{ $item['id'] }}" data-type="contactNumber"></div>
            </div>
        </td>
        <td>{{ $item['leadSource'] }}</td>
        <td>{{ $item['leadType'] }}</td>
        <td>{{ $item['created_at'] }}</td>
        <td>{{ $item['createdBy'] }}</td>
        <td>
            <div class="statuscomnt15">
                <select style="text-align: center;" id="status" name="status" class="form-control onchangeajax">
                    <option value="Open" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Open' ? 'selected' : '' }}>
                        Open</option>
                    <option value="Close" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Close' ? 'selected' : '' }}>
                        Close
                    </option>
                    <option value="Follow Up" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Follow Up' ? 'selected' : '' }}>
                        Follow
                        Up</option>
                    <option value="Converted" data-id="{{ $item['id'] }}" data-type="status" {{ $item['status'] == 'Converted' ? 'selected' : '' }}>
                        Converted</option>
                </select>
                <span id="stscomentclick" style="display: block;"><i class="far fa-comment-dots"></i></span>
                <div id="textcomnt233">
                    <textarea class="form-control" placeholder="Type Comment">
                  </textarea>
                </div>
            </div>
        </td>
        <td>
            <div class="comnt98">
                <div class="comnt55">
                    <button type="button" class="btn btn-primary btncomntcli56 myRowComment" data-id="{{ $item['id'] }}" data-code="{{ $item['enqueryID'] }}">
                        Comments
                    </button>
                </div>
                <div class="comnt55">
                    <button type="button" class="btn btn-primary btncomntcli57" data-code="{{ $item['enqueryID'] }}">
                        View Comments
                    </button>
                </div>
            </div>
        </td>
        <td>{{ $item['empfeedback'] }} </td>
        <td>
            <select id="rank" name="rank" style="text-align: center;" class="form-control onchangeajax">
                <option value="Hot" data-id="{{ $item['id'] }}" data-type="rank">Hot</option>
                <option value="Warm" data-id="{{ $item['id'] }}" data-type="rank">Warm</option>
                <option value="Cold" data-id="{{ $item['id'] }}" data-type="rank">Cold</option>
            </select>
        </td>
        <td>
            <select id="assignTo" name="assignTo" style="text-align: center;" class="form-control onchangeajax">
                @foreach($users as $user)
                <option value="{{$user['id']}}" data-id="{{ $item['id'] }}" data-type="assignTo" {{ $item->assignTo == $user->id ? 'selected' : '' }}>{{$user['name']}}</option>
                @endforeach
            </select>
        </td>
        <td>{{ $item['URL'] }}</td>
    </tr>
    @endforeach
</tbody>
@else
<tbody>
    <tr>
        <td class="text-center" colspan="15"> No data found.</td>
    </tr>
</tbody>
@endif