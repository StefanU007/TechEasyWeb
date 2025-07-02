@extends('emails.layouts.email')

@section('content')
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
        <tr>
            <td style="text-align: center; padding-bottom: 20px;">
                <h1 class="header-text" style="margin: 0; font-size: 28px; color: #1a202c; font-weight: 700;">New Website Order Received</h1>
            </td>
        </tr>

        <tr>
            <td style="font-size: 16px; color: #4a5568; line-height: 1.6; padding-bottom: 24px;">
                <p class="paragraph-text" style="margin: 0 0 16px;">Dear TechEasyWeb Team,</p>
                <p class="paragraph-text" style="margin: 0 0 16px;">
                    This notification confirms that a new order request has been successfully submitted through your website builder.
                    Please find the details of the new order below for your immediate review.
                </p>

                <p class="paragraph-text" style="margin: 0 0 8px;"><strong>Template ID:</strong> <span style="color: #2b6cb0; font-weight: 600;">{{ $order->template_id }}</span></p>
                <p class="paragraph-text" style="margin: 0;"><strong>Client Email:</strong> <a href="mailto:{{ $order->email }}" style="color: #2b6cb0; text-decoration: none;">{{ $order->email }}</a></p>

                <p class="paragraph-text" style="margin-top: 24px; margin-bottom: 24px;">
                    To preview the selected template and proceed with the order, please use the button below:
                </p>
            </td>
        </tr>

        <tr>
            <td style="text-align: center; padding-bottom: 30px;">
                <a href="{{ url('/templates/' . $order->template->uuid) }}"
                   class="button"
                   style="background-color: #596ab4; color: white; text-decoration: none; font-weight: 600; font-size: 17px; padding: 14px 28px; border-radius: 8px; display: inline-block; transition: background-color 0.2s ease-in-out;"
                   target="_blank">
                    Review Template
                </a>
            </td>
        </tr>

        <tr>
            <td style="font-size: 13px; color: #718096; text-align: center; padding-top: 20px; border-top: 1px solid #edf2f7;">
                <p style="margin: 0 0 8px;">This email was sent automatically from <strong>TechEasyWeb</strong>.</p>
                <p style="margin: 0;">If you have any questions, please do not reply to this automated email.</p>
            </td>
        </tr>
    </table>
@endsection
