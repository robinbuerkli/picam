<?php namespace PiCam\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use PiCam\Stream;

/**
 * This controller handles the display of all "normal" content pages.
 *
 * Class PageController
 * @author Robin Bürkli <robinbuerkli at bluewin dot ch>
 * @package PiCam\Http\Controllers
 */
class PageController extends Controller {

	/**
	 * Show the home page of the application.
	 *
	 * @return \Illuminate\View\View
	 */
	public function getHome()
	{
		return view('pages/home');
	}

  /**
   * Show the list of remote streams.
   *
   * @return \Illuminate\View\View
   */
  public function getStreams() {
    return view('pages/streams');
  }

  /**
   * Show the internal archive (recordings).
   *
   * @return \Illuminate\View\View
   */
  public function getArchive() {
    return view('pages/archive');
  }

  /**
   * Show an about page with some basic information about the application and it's author.
   *
   * @return \Illuminate\View\View
   */
  public function getAbout() {
    return view('pages/about');
  }
}
