<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    public function index()
    {
        $files = File::files(public_path('assets/video'));
        $videos = [];

        foreach ($files as $file) {
            $ext = strtolower($file->getExtension());
            if (in_array($ext, ['mp4', 'webm', 'ogg', 'mov', 'avi'])) {
                $videos[] = [
                    'name' => $file->getFilename(),
                    'path' => 'assets/video/' . $file->getFilename(),
                    'size' => $file->getSize(),
                ];
            }
        }

        return view('pages.upload-video', compact('videos'));
    }

    public function upload(Request $request)
    {
        $request->validate([
            'video' => 'required|file|mimes:mp4,webm,ogg,mov,avi|max:102400',
        ]);

        $file = $request->file('video');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('assets/video'), $filename);

        return back()->with('success', 'Video berhasil diupload.');
    }

    public function destroy($filename)
    {
        $path = public_path('assets/video/' . $filename);
        if (File::exists($path)) {
            File::delete($path);
            return back()->with('success', 'Video berhasil dihapus.');
        }
        return back()->with('error', 'Video tidak ditemukan.');
    }
}
