<?php

namespace Tests\Feature\Http\Controllers\API;

use App\Models\Bot;
use App\Models\User;
use App\Models\UserAudible;
use BotsTableSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\API\ChatController
 */
class ChatControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function audibles_returns_an_ok_response()
    {
        $audible = factory(UserAudible::class)->create();

        $response = $this->actingAs($audible->user)->get('api/chat/audibles');

        $response->assertOk();
    }

    /**
     * @test
     */
    public function bot_messages_returns_an_ok_response()
    {
        $this->seed(BotsTableSeeder::class);

        $user = factory(User::class)->create();

        $bot = Bot::where('slug', 'systembot')->first();

        $response = $this->actingAs($user)->get('api/chat/bot/'.$bot->id);

        $response->assertOk();
    }

    /**
     * @test
     */
    public function bots_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('api/chat/bots');

        $response->assertOk();
    }

    /**
     * @test
     */
    public function config_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('api/chat/config');

        $response->assertOk();
    }

    public function create_message_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/messages', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function delete_bot_echo_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/echoes/{user_id}/delete/bot', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function delete_message_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('api/chat/message/{id}/delete');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function delete_room_echo_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/echoes/{user_id}/delete/chatroom', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function delete_target_echo_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/echoes/{user_id}/delete/target', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function echoes_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('api/chat/echoes');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function messages_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('api/chat/messages/{room_id}');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function private_messages_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('api/chat/private/messages/{target_id}');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function rooms_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('api/chat/rooms');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    /**
     * @test
     */
    public function statuses_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->get('api/chat/statuses');

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function toggle_bot_audible_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/audibles/{user_id}/toggle/bot', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function toggle_room_audible_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/audibles/{user_id}/toggle/chatroom', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function toggle_target_audible_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/audibles/{user_id}/toggle/target', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function update_user_chat_status_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/user/{id}/status', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function update_user_room_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/user/{id}/chatroom', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    public function update_user_target_returns_an_ok_response()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)->post('api/chat/user/{id}/target', [
            // TODO: send request data
        ]);

        $response->assertOk();

        // TODO: perform additional assertions
    }

    // test cases...
}
