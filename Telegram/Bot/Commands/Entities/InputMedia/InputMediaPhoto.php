<?php
/**
 * This file is part of the TelegramBot package.
 *
 * (c) Avtandil Kikabidze aka LONGMAN <akalongman@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Telegram\Bot\Entities\InputMedia;

use App\Telegram\Bot\Entities\Entity;

/**
 * Class InputMediaPhoto
 *
 * @link https://core.telegram.org/bots/api#inputmediaphoto
 *
 * <code>
 * $data = [
 *   'media'   => '123abc',
 *   'caption' => 'Photo caption',
 * ];
 * </code>
 *
 * @method string getType()    Type of the result, must be photo
 * @method string getMedia()   File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
 * @method string getCaption() Optional. Caption of the photo to be sent, 0-200 characters
 *
 * @method $this setMedia(string $media)     File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
 * @method $this setCaption(string $caption) Optional. Caption of the photo to be sent, 0-200 characters
 */
class InputMediaPhoto extends Entity implements InputMedia
{
    /**
     * InputMediaPhoto constructor
     *
     * @param array $data
     *
     * @throws \App\Telegram\Bot\Exception\TelegramException
     */
    public function __construct(array $data = [])
    {
        $data['type'] = 'photo';
        parent::__construct($data);
    }
}
