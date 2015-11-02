<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostsAdminController extends Controller
{
	/**
	 * @var Post
	 */
	private $posts;

	public function __construct(Post $posts) {

		$this->post = $posts;
	}
	public function index() {
		$posts = $this->post->paginate(5);

		return view('admin.posts.index', compact('posts'));
	}

	/**
	 * Create Post Edit Form.
	 * @return \Illuminate\View\View
	 */
	public function create() {
		return view('admin.posts.create');
	}

	/**
	 * @param Requests\PostRequest $request
	 * @return mixed
	 */
	public function store(PostRequest $request) {
		$post = $this->post->create($request->all());
		/**
		 * Sync TAGS (pivot table)
		 */
		$post->tags()->sync($this->getTagsIds( $request->tags ));

		return redirect()->route('admin.post.list');
	}

	/**
	 * @param $id
	 * @return \Illuminate\View\View
	 */
	public function edit($id) {
		$post = $this->post->find( $id );
		return view( 'admin.posts.edit', compact( 'post' ) );
	}

	/**
	 * Updating Post.
	 *
	 * @param $id
	 * @param PostRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update($id, PostRequest $request) {
		$this->post->find($id)->update($request->all());
		$post = $this->post->find( $id );
		$post->tags()->sync( $this->getTagsIds( $request->tags ) );
		return redirect()->route('admin.post.list');
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($id) {
		$this->post->find($id)->delete();
		return redirect()->route('admin.post.list');
	}

	private function getTagsIds( $tagsRequest ) {
		$tags = array_filter( array_map( 'trim', explode( ',', $tagsRequest ) ) );
		$tagsIds = [];
		foreach ( $tags as $eachTagName ) {
			$tagsIds[] = Tag::firstOrCreate(['name' => $eachTagName])->id;
		}

		return $tagsIds;
	}
}
