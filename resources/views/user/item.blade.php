<tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td class="text-danger">
          <a href="{{  route('user.delete',$user->id) }}">Delete</a>
          <a href="{{ route('user.edit',$user->id) }}">Edit</a>
    <td>
</tr>