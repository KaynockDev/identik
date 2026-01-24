<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Doctor;
use App\Models\Reel;
use App\Models\Smile;
use App\Models\TrustPilot;
use Artisan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Facades\Process;
use Spatie\Crawler\Crawler;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\DomCrawler\Crawler as DomCrawler;



class TestController extends Controller
{
  public function index()
  {




  }







}
