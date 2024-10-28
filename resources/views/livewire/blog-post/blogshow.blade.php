<div class="bg-stone-100 font-lex">
    <div>
        <x-web.items.banner title="Blog" tagline="Inspiring Success: Your Pathway to Excellence!"/>
    </div>

    <div class="w-8/12 mx-auto pt-32 pb-16">

        {{--    @foreach($list as $row)--}}
        <div class="bg-white rounded-2xl">

            <div class="relative">
                <img src="{{ \Illuminate\Support\Facades\Storage::url('/images/'.$blog->image) }}"
                     alt="{{$blog->image}}" class="w-full h-[40rem] rounded-t-2xl">
                {{--                <img src="../../../../images/wall1.webp" alt="" class="w-full h-[40rem] rounded-t-2xl">--}}
                <div
                    class="max-w-max bg-orange-600 text-xs text-white px-2 py-1 rounded absolute top-6 left-6 shadow-sm shadow-gray-900">
                    {{\Aaran\Blog\Models\BlogPost::tagName($blog->blogtag_id)}}
                </div>
            </div>

            <div class="pt-12  space-y-5 ">
                <div
                    class="px-5 font-semibold text-[10px] text-orange-700">{{ $blog->created_at->diffForHumans() }}</div>
                <div class="px-5 uppercase font-merri text-2xl tracking-wider">{{$blog->vname}}
                </div>
                <div class="px-5 text-xs text-gray-400 leading-loose tracking-wider">
                    {{$blog->body}}
                </div>

                <div class="px-5 text-xs border-t py-5 flex justify-between items-center">
                <span class="text-gray-500">Post By - <span
                        class="text-orange-700 font-normal">{{ $blog->user->name }}</span></span>
                    <span class="inline-flex items-center space-x-4">
                            <span>
                                <svg width="" height="" viewBox="0 0 90 90" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class=" w-4 h-4 ">
                                <path
                                    d="M85 45C85 22.9086 67.0914 5 45 5C22.9086 5 5 22.9086 5 45C5 64.9649 19.6273 81.5133 38.75 84.5141V56.5625H28.5938V45H38.75V36.1875C38.75 26.1625 44.7219 20.625 53.8586 20.625C58.2352 20.625 62.8125 21.4063 62.8125 21.4063V31.25H57.7687C52.8 31.25 51.25 34.3336 51.25 37.4969V45H62.3438L60.5703 56.5625H51.25V84.5141C70.3727 81.5133 85 64.9656 85 45Z"
                                    fill="#1877F2"/>
                                <path
                                    d="M60.5703 56.5625L62.3438 45H51.25V37.4969C51.25 34.3336 52.8 31.25 57.7687 31.25H62.8125V21.4062C62.8125 21.4062 58.2352 20.625 53.8586 20.625C44.7219 20.625 38.75 26.1625 38.75 36.1875V45H28.5938V56.5625H38.75V84.5141C40.7867 84.8336 42.8734 85 45 85C47.1266 85 49.2133 84.8336 51.25 84.5141V56.5625H60.5703Z"
                                    fill="white"/>
                            </svg>

                            </span>
                            <span>
                                <svg width="" height="" viewBox="0 0 90 90" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class=" w-4 h-4 ">
<path
    d="M79.3339 27.1022C79.3868 27.8681 79.3869 28.634 79.3869 29.4069C79.3869 52.9587 61.4574 80.121 28.6727 80.121V80.1069C18.988 80.121 9.5045 77.3469 1.35156 72.1163C2.7598 72.2857 4.17509 72.3704 5.59392 72.374C13.6198 72.381 21.4163 69.6881 27.7304 64.7292C20.1033 64.5845 13.4151 59.6116 11.0786 52.3516C13.7504 52.8669 16.5033 52.761 19.1257 52.0445C10.8104 50.3645 4.82803 43.0587 4.82803 34.574C4.82803 34.4963 4.82803 34.4222 4.82803 34.3481C7.30568 35.7281 10.0798 36.494 12.9174 36.5787C5.08568 31.3445 2.67156 20.9257 7.40097 12.7798C16.4504 23.9151 29.8021 30.6845 44.1351 31.401C42.6986 25.2104 44.661 18.7234 49.2916 14.3716C56.4704 7.62336 67.761 7.96925 74.5092 15.1445C78.501 14.3575 82.3269 12.8928 85.828 10.8175C84.4974 14.9434 81.7127 18.4481 77.9927 20.6751C81.5257 20.2587 84.9774 19.3128 88.228 17.8692C85.8351 21.4551 82.821 24.5787 79.3339 27.1022Z"
    fill="#1D9BF0"/>
</svg>
                            </span>
                            <span>
                                <svg width="" height="" viewBox="0 0 90 90" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class=" w-4 h-4 ">
<path
    d="M45.9997 37.7273V53.2183H67.527C66.5817 58.2002 63.745 62.4186 59.4905 65.2549L72.4724 75.3278C80.036 68.3461 84.3997 58.0914 84.3997 45.9096C84.3997 43.0733 84.1453 40.3457 83.6724 37.7278L45.9997 37.7273Z"
    fill="#4285F4"/>
<path
    d="M23.5822 52.6137L20.6543 54.855L10.2904 62.9276C16.8722 75.9821 30.3622 85.0005 45.9986 85.0005C56.7984 85.0005 65.8529 81.4368 72.4713 75.3278L59.4894 65.255C55.9258 67.655 51.3802 69.1097 45.9986 69.1097C35.5986 69.1097 26.7624 62.0915 23.5985 52.6368L23.5822 52.6137Z"
    fill="#34A853"/>
<path
    d="M10.2906 27.0729C7.56349 32.4545 6 38.5274 6 45C6 51.4727 7.56323 57.546 10.2904 62.9276C10.2904 62.9637 23.6001 52.5998 23.6001 52.5998C22.8001 50.1998 22.3272 47.6545 22.3272 44.9996C22.3272 42.3447 22.8001 39.7994 23.6001 37.3994L10.2906 27.0729Z"
    fill="#FBBC05"/>
<path
    d="M45.9994 20.9274C51.8905 20.9274 57.1268 22.9637 61.3086 26.891L72.7631 15.4366C65.8176 8.96391 56.7997 5 45.9994 5C30.3631 5 16.8725 13.9819 10.2906 27.0729L23.5994 37.4002C26.7629 27.9455 35.5994 20.9274 45.9994 20.9274Z"
    fill="#EA4335"/>
</svg>
                            </span>
                            <span class="inline-flex gap-x-1 items-center">
                                <span class="text-xs text-gray-500">20</span> <svg xmlns="http://www.w3.org/2000/svg"
                                                                                   fill="none" viewBox="0 0 24 24"
                                                                                   stroke-width="1.5"
                                                                                   stroke="currentColor"
                                                                                   class="size-4 text-gray-600">
  <path stroke-linecap="round" stroke-linejoin="round"
        d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z"/>
</svg>


                            </span>


                        </span>
                </div>
            </div>
        </div>
        {{--    @endforeach--}}
    </div>

    <div class="w-8/12 mx-auto space-y-5 py-16">

        <div class="w-8/12 mx-auto space-y-5 py-16">

{{--            <form wire:submit.prevent="submitComment">--}}
{{--                <textarea wire:model="comment" placeholder="Add your comment..." rows="4" class="form-control"></textarea>--}}
{{--                @error('comment') <span class="text-danger">{{ $message }}</span> @enderror--}}
{{--                <button type="submit" class="btn btn-primary mt-2">Submit</button>--}}
{{--            </form>--}}

{{--            <div class="mt-4">--}}
{{--                <h3>All Comments</h3>--}}
{{--                @foreach ($comments as $comment)--}}
{{--                    <div class="border p-2 mb-2">--}}
{{--                        <strong>{{ $comment->user ? $comment->user->name : 'Guest' }}:</strong>--}}
{{--                        <p>{{ $comment->comment }}</p>--}}
{{--                        <small>{{ $comment->created_at->diffForHumans() }}</small>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}


            <div class="space-y-3">
                <div>Comments</div>

                <form action="">
            <textarea name="" id="" cols="30" rows="3">

            </textarea>
                    <input type="submit" value="Comment">
                </form>
            </div>

            <div class="space-y-3">
                <div>All Comments</div>

                <div>
                    <div class="font-semibold">Admin</div>
                    <div>
                        1 Lorem ipsum dolor.
                    </div>
                    <a href="javascript::void(0);" class="text-blue-500" onclick="reply(this)">Reply</a>
                </div>

                <div>
                    <div class="font-semibold">User</div>
                    <div>
                        2 Lorem ipsum dolor.
                    </div>
                    <a href="javascript::void(0);" class="text-blue-500" onclick="reply(this)">Reply</a>
                </div>

                <div>
                    <div class="font-semibold">manager</div>
                    <div>
                        3 Lorem ipsum dolor.
                    </div>
                    <a href="javascript::void(0);" class="text-blue-500" onclick="reply(this)">Reply</a>
                </div>
            </div>

            <div style="display: none" class="replyDiv space-y-2">
                <textarea name="" id="" cols="30" rows="3" placeholder="Write Something Here"></textarea>
                <div>
                    <a href="" class="bg-blue-500 text-white px-3 py-1">Reply</a>
                </div>
            </div>
        </div>


        <script>

            function reply(caller) {
                $('.replyDiv').insertAfter($(caller));

                $('.replyDiv').show();
            }

        </script>

    </div>
</div>
